<?php
function calculateTotalAmount($quantity, $pricePerItem) {
        $totalCost = $quantity * $pricePerItem;

        // Apply 10% discount if total cost is 1000 or more
        if ($totalCost >= 1000) {
                $totalCost *= 0.90;
        }

        return $totalCost;
}

// Test values
$tests = [
        [4, 150],
        [6, 200],
        [10, 120]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Total Purchase with Discount</title>
        <link rel="stylesheet" href="style.CSS">
</head>
<body>
    <main class="container">
        <h1>Total Purchase Summary</h1>
        <p class="summary muted">Shows final amount after a 10% discount when total &ge; 1000</p>

        <table>
            <thead>
                <tr>
                    <th>Quantity</th>
                    <th>Price per Item</th>
                    <th>Final Amount to Pay</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tests as $test): ?>
                    <tr>
                        <td><?= htmlspecialchars($test[0], ENT_QUOTES); ?></td>
                        <td><?= number_format($test[1], 2); ?></td>
                        <td class="amount"><?= number_format(calculateTotalAmount($test[0], $test[1]), 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>

