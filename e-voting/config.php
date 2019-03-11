<?php
// this is the config file for the project
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'cse');


// this is the configuration for smtp so as to use and send mail

//replace the valid_email with a valid active gmail address
define('SMTP_USER', '');

//replace password with the password of the same account
define('SMTP_PASSWORD', '');

// domain name
define('HOST', '');

//replace valid_email_address with any email address
//This is to test if the email sending works at all
//open the test_mail.php in your browser after setting up
// define('TEST_EMAIL', 'valid_email_address')

//NB: Sending email requires internet connectivity

?>