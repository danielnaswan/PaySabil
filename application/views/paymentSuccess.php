<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0ffe0;
            text-align: center;
            padding: 50px;
        }
        .success-box {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        h1 {
            font-size: 2.5em;
        }
        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="success-box">
        <h1>Payment Successful!</h1>
        <p>Thank you, your payment has been successfully processed.</p>
        <p>Transaction ID: <?= isset($transaction_id) ? $transaction_id : 'N/A' ?></p>
    </div>
</body>
</html>