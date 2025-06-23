# WellnessWheel - Appointment Booking System

## PHPMailer Setup Instructions

To enable email functionality for the appointment booking system, you need to install PHPMailer. Follow these steps:

### 1. Install Composer (if not already installed)

- **Windows**: Download and run the Composer installer from [getcomposer.org](https://getcomposer.org/download/)
- **Linux/Mac**: Follow the command-line installation instructions on [getcomposer.org](https://getcomposer.org/download/)

### 2. Install PHPMailer using Composer

Open a command prompt or terminal, navigate to your project directory, and run:

```bash
cd c:\xampp\htdocs\Wellness_Wheel
composer require phpmailer/phpmailer
```

### 3. Verify Installation

After installation, you should see:
- A new `vendor` directory in your project
- A `composer.json` file
- A `composer.lock` file

### 4. SMTP Configuration

The SMTP settings are already configured in the `process_appointment.php` file with the following details:

- SMTP Server: smtp.hostinger.com
- Username: info@wellnesswheels.in
- Password: Sudhanshu20@
- Port: 587
- Encryption: TLS

### 5. Testing

To test if the email functionality is working:
1. Fill out the appointment form on the website
2. Submit the form
3. Check if you receive a success message
4. Verify that the email was received at the configured email address

### Troubleshooting

If you encounter issues:

1. **Check PHP Error Logs**: Look in your XAMPP error logs for any PHP errors
2. **Verify SMTP Settings**: Ensure the SMTP credentials are correct
3. **Check Firewall/Antivirus**: Some security software might block outgoing SMTP connections
4. **Enable PHP Extensions**: Make sure the following PHP extensions are enabled in your php.ini file:
   - openssl
   - mbstring
   - pdo

### Security Note

For production environments, it's recommended to:
1. Store sensitive information like SMTP credentials in environment variables or a separate configuration file that is not committed to version control
2. Implement additional security measures like CSRF protection
3. Consider using HTTPS for all form submissions