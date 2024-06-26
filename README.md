
---
## Output: [Weather Data Fetch and Emailer Project Demo](https://drive.google.com/file/d/1sirPYCkbNCg5c0andkH7-7GfGR24JHYw/view?usp=sharing)

## Weather Data Fetch and Emailer Project

This project is a simple web application that fetches weather data from the Weather.com API based on user input (location) and sends a weather report email to a specified recipient using PHPMailer.

### Installation and Setup

To run this project without installing Composer globally, follow these steps:

#### 1. Clone the Repository

Clone the project repository to your local machine using Git:
```bash
git clone https://github.com/dchaudhari7177/Weather-Data-Fetch-and-Emailer.git
```

#### 2. Navigate to the Project Directory

Navigate to the project directory in your terminal:
```bash
cd project-directory
```

#### 3. Install Project Dependencies

Since the `vendor` directory is included in the repository, you don't need to install Composer globally. Use the following command to install project dependencies:
```bash
php composer.phar install
```
This command will use the locally included Composer (from `composer.phar`) to install the required dependencies defined in `composer.json`.

#### 4. Configure SMTP Settings

Currently i mentioned there in the code my details of email and smtp,,,now this can able to run on that so no need to change anything,,


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

#### 5. Generate App Password (if needed)

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

### Implementation Details

- **Composer:** Composer is used to manage PHP dependencies in the project. The `composer.json` file defines the required packages, including `phpmailer/phpmailer`.
- **PHPMailer (phpmailer/phpmailer):** PHPMailer is utilized to send emails using SMTP. It provides a convenient and secure way to send email messages programmatically from PHP.

### Notes

- This project demonstrates basic usage of APIs (Weather.com) and email sending using PHP.
- Customize the project as needed for your specific use case (e.g., additional features, error handling, styling).
- Ensure you handle sensitive information (e.g., API keys, SMTP passwords) securely and never expose them publicly.
- Please feel free to contact with me any queries or feedback.
