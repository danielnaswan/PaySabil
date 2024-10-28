<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe0e0;
            text-align: center;
            padding: 50px;
        }
        .fail-box {
            background-color: #f44336;
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
    <div class="fail-box">
        <h1>Payment Failed</h1>
        <p>Unfortunately, we were unable to process your payment.</p>
        <p>Transaction ID: <?= isset($transaction_id) ? $transaction_id : 'N/A' ?></p>
        <p>Please try again or contact support.</p>
    </div>
</body>
</html>
