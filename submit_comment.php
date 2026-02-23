<?php
require_once 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $comment = trim($_POST['comment']);

    if (!empty($name) && !empty($comment)) {
        $recaptchaResponse = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
        
        // Verify reCAPTCHA
        $verifyUrl = "https://www.google.com/recaptcha/api/siteverify";
        $data = [
            'secret' => RECAPTCHA_SECRET_KEY,
            'response' => $recaptchaResponse,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];
        
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        
        $context  = stream_context_create($options);
        $verifyResult = file_get_contents($verifyUrl, false, $context);
        $responseData = json_decode($verifyResult);
        
        if (!$responseData || !$responseData->success) {
            header("Location: index.php?error=captcha#comment-form");
            exit;
        }

        try {
            $stmt = $pdo->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
            $stmt->execute([$name, $comment]);
            header("Location: index.php?success=1#comments");
            exit;
        } catch (PDOException $e) {
            die("Error saving comment: " . $e->getMessage());
        }
    } else {
        header("Location: index.php?error=missing_fields#comment-form");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
