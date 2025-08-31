
Built by https://www.blackbox.ai

---

# Agrobom - Agricultural Management System

## Project Overview

Agrobom is an agricultural management system built with CodeIgniter, offering functionalities for both administrators and customers. This application aims to streamline various agricultural management tasks, enhancing productivity and efficiency in farm operations.

---

## Installation

To install and run the Agrobom application, follow these steps:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/johnlen7/agrobom.git
   cd agrobom
   ```

2. **Install Dependencies:**
   Ensure you have [Composer](https://getcomposer.org/) installed, then run:
   ```bash
   composer install
   ```

3. **Set Up the Database:**
   Refer to `DATABASE_SETUP.md` for detailed instructions on setting up the database on Railway or any other platform of your choice.

4. **Configure Environment Variables:**
   Set the necessary environment variables as specified in the deployment guides, ensuring database credentials and application settings are correctly defined.

---

## Usage

Once the application is set up:

1. **Run the Server:**
   You can run the PHP built-in server:
   ```bash
   php -S localhost:8080 -t public
   ```

2. **Access the Application:**
   Open your browser and navigate to `http://localhost:8080` (or your configured domain if deployed).

3. **User Access:**
   Log in as an admin or a client based on the roles defined in your system.

---

## Features

- User management for both admin and client roles.
- Comprehensive agricultural data management.
- Database integration for persistent data storage.
- Scalable deployment options including Railway, Heroku, and VPS setups.

---

## Dependencies

The application requires the following dependencies, as defined in `composer.json`:

- **PHP**: >= 5.3.7
- **MercadoPago PHP SDK**: 2.4.2
- **PagSeguro PHP SDK**: ^6.0
- **GuzzleHttp**: ^7.9
- Development Dependencies:
  - **Mikey179/vfsStream**: 1.1.*
  - **PHPUnit**: 4.* || 5.*

Ensure your server meets the PHP version requirement (PHP 7.4 or later is recommended).

---

## Project Structure

The directory structure for the Agrobom project is as follows:

```
agrobom/
├── application/          # Main application code for CodeIgniter
│   ├── controllers/      # Controllers for admin and client
│   ├── models/          # Data models
│   ├── views/           # Templates and views
│   └── config/          # Configuration files
├── assets/              # CSS, JS, images
├── system/              # CodeIgniter framework
├── vendor/              # Composer dependencies
├── mmn.sql.gz          # SQL dump of the database
└── index.php            # Entry point for the application
```

---

## Documentation

For more detailed instructions on deploying the application, refer to:

- **DATABASE_SETUP.md**: Instructions on setting up the database.
- **DEPLOY_README.md**: Guidelines for deploying the application on different platforms.
- **RAILWAY_DEPLOY.md**: Specific instructions for deploying the application using Railway.

---

## Support

For any questions regarding the application, issues encountered, or contributions, please refer to the following resources:
- CodeIgniter Documentation: [https://codeigniter.com/](https://codeigniter.com/)
- Community Forum: [http://forum.codeigniter.com/](http://forum.codeigniter.com/)
- GitHub Issues: [Report a bug or request a feature](https://github.com/johnlen7/agrobom/issues)