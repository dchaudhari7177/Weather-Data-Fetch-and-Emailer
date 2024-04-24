---

## Weather Data Fetch and Emailer Project

This project is a simple web application that fetches weather data from the Weather.com API based on user input (location) and sends a weather report email to a specified recipient using PHPMailer.

### Installation and Setup

To run this project, you'll need to have Composer installed on your machine. Follow these steps to get started:

#### 1. Install Composer

- **Windows:**
  1. Download the Composer installer from [getcomposer.org/download](https://getcomposer.org/download/).
  2. Double-click the downloaded `Composer-Setup.exe` to run the installer.
  3. Follow the installation wizard instructions to complete the Composer installation.
  4. Make sure to select the option to "Install for all users" and "Add Composer to system PATH" during installation.

- **Mac/Linux:**
  1. Open a terminal window.
  2. Run the following command to download and install Composer globally:
     ```bash
     curl -sS https://getcomposer.org/installer | php
     ```
  3. Move the downloaded `composer.phar` file to a directory in your system path:
     ```bash
     sudo mv composer.phar /usr/local/bin/composer
     ```

#### 2. Clone the Repository

Clone the project repository to your local machine using Git:
```bash
git clone https://github.com/your/repository.git
```

#### 3. Install Composer Dependencies

Navigate to the project directory and run Composer install to install the required dependencies:
```bash
cd project-directory
composer install
```

#### 4. Configure SMTP Settings

Open `send_email.php` and configure the SMTP settings for sending emails. Update the following lines with your SMTP server details:
```php
// SMTP Server Settings (e.g., Gmail)
$mail->isSMTP();
$mail->Host       = 'smtp.example.com';  // SMTP server address
$mail->SMTPAuth   = true;
$mail->Username   = 'your_email@example.com';  // SMTP username (your email)
$mail->Password   = 'your_smtp_password';  // SMTP password or app password
$mail->SMTPSecure = 'tls';  // Enable TLS encryption
$mail->Port       = 587;  // SMTP port (e.g., 587 for TLS)
```

#### 5. Generate App Password (if error occurs like "error: smtp error: could not authenticate.")

If you encounter an SMTP authentication error (e.g., `SMTP Error: Could not authenticate.`) with Gmail, follow these steps:
- Go to Google Account Settings > Security > App passwords.
- Select "Mail" and "Other (Custom Name)".
- Generate a 16-digit app password and replace `'your_smtp_password'` in `send_email.php` with this app password.

### Usage

1. **Start the Web Server:**
   If you're using XAMPP, WAMP, or similar, start your local web server.

2. **Access the Weather App:**
   Open a web browser and navigate to `http://localhost/Weather-Data-Fetch-and-Emailer/index.php`.

3. **Enter Location and Email:**
   - Enter a location (e.g., city name) in the "Enter Location" field.
   - Enter the recipient's email address in the "Enter Email" field.

4. **Get Weather Report:**
   Click the "Get Weather" button to fetch weather data from the Weather.com API and send a weather report email to the specified recipient.

### Troubleshooting

- **SMTP Authentication Error:**
  If you encounter an SMTP authentication error, follow the instructions above to generate an app password for Gmail and update the SMTP settings in `send_email.php`.

- **Other Errors:**
  If you encounter any other errors while running the project, refer to the error messages for guidance. Check the PHP error logs for more details if needed.

### Dependencies

- **PHPMailer:** Used for sending emails via SMTP.
- **Guzzle HTTP:** (optional) Can be used for making HTTP requests to external APIs (e.g., Weather.com).

### Notes

- This project demonstrates basic usage of APIs (Weather.com) and email sending using PHP.
- Customize the project as needed for your specific use case (e.g., additional features, error handling, styling).
- Ensure you handle sensitive information (e.g., API keys, SMTP passwords) securely and never expose them publicly.

---