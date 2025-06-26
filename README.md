# Online Identity Issuing Service

A PHP-based web application for managing identity card applications, featuring an intuitive workflow for users and administrators. The service supports user registration, form submission, admin verification, and provides informational pages such as About Us and Contact Us.

## Features

- **User Registration & Authentication:** Secure account creation and login.
- **Identity Card Applications:** Users can submit and track applications for identity cards.
- **Admin Verification:** Administrators can review and verify applications.
- **Informational Pages:** Includes About Us and Contact Us sections.
- **Responsive Design:** Modern layout using Tailwind CSS for an optimal user experience across devices.

## Tools & Technologies

- **Backend:** PHP
- **Frontend:** HTML, JavaScript, Tailwind CSS
- **Database:** MySQL
- **Database Management:** PhpMyAdmin
- **Development Environment:** XAMPP

## Getting Started

### Prerequisites

- PHP 7.4+ (recommended)
- MySQL server
- XAMPP (for an all-in-one local server solution)
- PhpMyAdmin (for database management)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/RickyJasonVanderheyden/Online-Identity-Issue-Service.git
   ```

2. **Set up the project in XAMPP:**
   - Copy the cloned folder (`Online-Identity-Issue-Service`) into the `htdocs` directory of your XAMPP installation.

3. **Set up the database:**
   - Start Apache and MySQL from the XAMPP control panel.
   - Open PhpMyAdmin by navigating to `http://localhost/phpmyadmin`.
   - Create a new database (e.g., `identity_service`).
   - Import the provided SQL file to set up the necessary tables.

4. **Configure the environment:**
   - Update any configuration files (such as a `config.php` or `.env` file) with your database credentials and settings as needed.

5. **Run the application:**
   - Open your browser and navigate to `http://localhost/Online-Identity-Issue-Service`.

## Usage

- **Users:** Register for an account, fill out an identity card application, and track its status.
- **Admins:** Log in to review submitted applications, verify or reject them, and manage user data.
- **Everyone:** Access general information via the About Us and Contact Us pages.

## Contributing

Contributions are welcome! Please open issues or submit pull requests for improvements or bug fixes.

1. Fork the repository.
2. Create a new feature branch:  
   ```bash
   git checkout -b feature/your-feature
   ```
3. Make your changes and commit them:  
   ```bash
   git commit -am 'Add your feature'
   ```
4. Push to your fork:  
   ```bash
   git push origin feature/your-feature
   ```
5. Open a pull request.

## License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.

## Contact

For questions or support, please open an issue or contact rickyjason83@gmail.com
