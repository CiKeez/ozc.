<?php
// Database configuration
$host = 'localhost';
$dbname = 'ozcanhal_comments';
$username = 'ozcanhal_cikee';
$password = 'CiA#0721-*';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8mb4'");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// reCAPTCHA Configuration
// Get your keys at https://www.google.com/recaptcha/admin/
define('RECAPTCHA_SITE_KEY', '6Lc7eXQsAAAAAFsg1fR_Gn9sKke6uJUQC8F3MdPZ');
define('RECAPTCHA_SECRET_KEY', '6Lc7eXQsAAAAAJ0XbH0cxR18wNLnUpR_imqDLUiX');
?>
