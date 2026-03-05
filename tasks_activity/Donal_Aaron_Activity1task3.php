<?php
$age = 20;
$isStudent = true;

if ($age <= 25 && $isStudent == true) {
        $message = "Eligible for student discount";
} else {
        $message = "Not eligible for student discount";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Student Discount Check</title>
    <link rel="stylesheet" href="style.CSS">
</head>
<body>
    <main class="container">
        <h1>Discount Eligibility</h1>
        <p class="summary muted">Age: <?= intval($age); ?> — Student: <?= $isStudent ? 'Yes' : 'No'; ?></p>
        <div class="card" style="padding:16px; text-align:center; margin-top:12px;">
            <strong><?= htmlspecialchars($message, ENT_QUOTES); ?></strong>
        </div>
    </main>
</body>
</html>

