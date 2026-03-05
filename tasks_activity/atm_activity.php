<?php
$balance = 500000;

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = isset($_POST["amount"]) ? (int)$_POST["amount"] : 0;
    $action = $_POST["action"];

    if ($action == "deposit") {
        $balance += $amount;
        $message = "You deposited Php$amount. New balance: Php$balance";
    }

    elseif ($action == "withdraw") {
        if ($amount > $balance) {
            $message = "Insufficient balance!";
        } else {
            $balance -= $amount;
            $message = "You withdraw Php$amount. New balance: Php$balance";
        }
    }

    elseif ($action == "check") {
        $message = "Your current balance is Php$balance";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ATM Activity</title>
</head>
<body>

<h2>Welcome To The ATM Bank!</h2>

<form method="post">
    
    <label>Select Action:</label>
    <select name="action" required>
        <option value="">--Choose Option--</option>
        <option value="deposit">Deposit</option>
        <option value="withdraw">Withdraw</option>
        <option value="check">Check Balance</option>
    </select>

    <br><br>

    <label>Enter Amount:</label>
    <input type="number" name="amount">

    <br><br>

    <button type="submit">Submit</button>

</form>

<h3><?php echo $message; ?></h3>

</body>
</html>
