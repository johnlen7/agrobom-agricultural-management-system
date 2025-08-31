<?php
// Importa mmnb.sql usando variáveis de ambiente do Railway
// DATABASE_URL formato: mysql://user:pass@host:port/db

echo "🚀 Importando mmnb.sql via composer script...\n";

$db_url = getenv('DATABASE_URL') ?: getenv('MySQL_MYSQL_URL');
if (!$db_url) {
    echo "❌ DATABASE_URL não encontrada nas variáveis de ambiente.\n";
    exit(1);
}

if (!preg_match('/mysql:\/\/([^:]+):([^@]+)@([^:]+):(\d+)\/(.+)/', $db_url, $m)) {
    echo "❌ DATABASE_URL inválida: $db_url\n";
    exit(1);
}

$user = $m[1];
$pass = $m[2];
$host = $m[3];
$port = $m[4];
$db = $m[5];

$sql_file = __DIR__ . '/../mmnb.sql';
if (!file_exists($sql_file)) {
    echo "❌ mmnb.sql não encontrado!\n";
    exit(1);
}

$cmd = "mysql -h $host -u $user -p$pass --port=$port --protocol=TCP $db < $sql_file";
echo "Executando: $cmd\n";

// Detecta ambiente (Linux, Windows)
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    // Windows: precisa chamar via cmd.exe
    $cmd = "cmd /c \"$cmd\"";
}

passthru($cmd, $exitCode);
if ($exitCode === 0) {
    echo "\n🎉 Importação concluída!\n";
} else {
    echo "\n❌ Erro na importação! Código: $exitCode\n";
}
?>
