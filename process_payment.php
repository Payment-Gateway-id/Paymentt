<?php
$emailku = 'premiumstore5527@gmail.com'; // GANTI EMAIL KAMU DISINI

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $amount = $_POST['amount'];

    // Generate random key string with pattern ID-#####
    $payment_code = 'ID-' . rand(10000, 99999);

    // Save transaction data to a file or database (optional)

    // Send payment code to user email
    $subject = 'Your Payment Code';
    $message = 'Your payment code is: ' . $payment_code;
    $headers = 'From: ' . $emailku . "\r\n" .
               'Reply-To: ' . $emailku . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($email, $subject, $message, $headers)) {
        echo 'Payment code has been sent to your email.';
    } else {
        echo 'Failed to send payment code. Please try again.';
    }

    // Redirect to receipt page with transaction details
    header('Location: receipt.php?email=' . urlencode($email) . '&amount=' . urlencode($amount) . '&payment_code=' . urlencode($payment_code));
    exit();
}
?>
