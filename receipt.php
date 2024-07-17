<?php
if (isset($_GET['email']) && isset($_GET['amount']) && isset($_GET['payment_code'])) {
    $email = $_GET['email'];
    $amount = $_GET['amount'];
    $payment_code = $_GET['payment_code'];
} else {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Receipt</h1>
        <p>Email: <?php echo htmlspecialchars($email); ?></p>
        <p>Amount: <?php echo htmlspecialchars($amount); ?></p>
        <p>Payment Code: <?php echo htmlspecialchars($payment_code); ?></p>
    </div>
</body>
</html>
