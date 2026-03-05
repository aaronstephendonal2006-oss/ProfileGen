<?php
$fullName = "Aaron Stephen C. Donal";
$course = "BSIS";
$yearLevel = "2ND Year";

$grade1 = 80;
$grade2 = 75;
$grade3 = 70;
$grade4 = 85;

$average = ($grade1 + $grade2 + $grade3 + $grade4) / 4;

if ($average >= 75) {
        $status = "PASS";
} else {
        $status = "FAIL";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Student Grade Summary</title>
    <link rel="stylesheet" href="style.CSS">
    <style>
        /* minimal fallback for when style.CSS is missing */
        .fallback { font-family: Arial, sans-serif; max-width:700px; margin:24px auto; }
    </style>
</head>
<body>
    <main class="container">
        <h1>Student Grade Summary</h1>
        <p class="summary muted">Basic student information and computed average</p>

        <table>
            <tbody>
                <tr><td><strong>Name</strong></td><td><?= htmlspecialchars($fullName, ENT_QUOTES); ?></td></tr>
                <tr><td><strong>Course</strong></td><td><?= htmlspecialchars($course, ENT_QUOTES); ?></td></tr>
                <tr><td><strong>Year Level</strong></td><td><?= htmlspecialchars($yearLevel, ENT_QUOTES); ?></td></tr>
                <tr><td colspan="2" style="height:8px"></td></tr>
                <tr><td><strong>Grade 1</strong></td><td><?= $grade1; ?></td></tr>
                <tr><td><strong>Grade 2</strong></td><td><?= $grade2; ?></td></tr>
                <tr><td><strong>Grade 3</strong></td><td><?= $grade3; ?></td></tr>
                <tr><td><strong>Grade 4</strong></td><td><?= $grade4; ?></td></tr>
                <tr><td><strong>Average</strong></td><td class="amount"><?= number_format($average, 2); ?></td></tr>
                <tr><td><strong>Status</strong></td><td><?= $status; ?></td></tr>
            </tbody>
        </table>
    </main>
</body>
</html>

