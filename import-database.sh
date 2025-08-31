#!/bin/bash
# Script para importar dados do banco no Railway

echo "🚀 Iniciando importação do banco de dados..."

# Credenciais do Railway (fallback se variáveis não estiverem definidas)
MYSQL_HOST=${MYSQLHOST:-"mainline.proxy.rlwy.net"}
MYSQL_USER=${MYSQLUSER:-"root"}
MYSQL_PASSWORD=${MYSQLPASSWORD:-"tyfyZmsNyzwXFQGdzUzLmYbMUYAREjPW"}
MYSQL_DATABASE=${MYSQLDATABASE:-"railway"}
MYSQL_PORT=${MYSQLPORT:-"37812"}

# Verificar se o arquivo existe
if [ ! -f "mmn.sql.gz" ]; then
    echo "❌ Arquivo mmn.sql.gz não encontrado!"
    exit 1
fi

# Extrair e importar
echo "📦 Extraindo arquivo SQL..."
gunzip -c mmn.sql.gz > mmn.sql

echo "💾 Importando dados para o banco..."
echo "Host: $MYSQL_HOST"
echo "User: $MYSQL_USER"
echo "Database: $MYSQL_DATABASE"
echo "Port: $MYSQL_PORT"

mysql -h $MYSQL_HOST -u $MYSQL_USER -p$MYSQL_PASSWORD -P $MYSQL_PORT $MYSQL_DATABASE < mmn.sql

if [ $? -eq 0 ]; then
    echo "✅ Importação concluída com sucesso!"
    # Limpar arquivo temporário
    rm mmn.sql
else
    echo "❌ Erro na importação!"
    echo "Verifique as credenciais e conexão com o banco."
    exit 1
fi