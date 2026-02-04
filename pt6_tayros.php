<?php
// Cost data
$items = [
    ["Lumber", 150000],
    ["Concrete", 78000],
    ["Drywall", 69000],
    ["Paint", 12000],
    ["Miscellaneous", 20000]
];

// Format money
function formatMoney($amt) {
    return "$ " . number_format($amt, 2);
}

// FUNCTION: calculate increased price
function increase($cost, $rate) {
    return $cost * $rate;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Public Library Expansion Project</title>
    <style>
        body { background: #a9e884; font-family: Arial; }
        .container {
            width: 80%;
            margin: 40px auto;
            padding: 30px;
            border: 3px solid black;
            background: #b0d69a;
        }
        h1 { color: #0346d8; text-align: center; }
        h2 { color: #b20d0d; text-align: center; }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th { background: #e8aa38; }
        tr:nth-child(even) { background: #cbf0ff; }
        tr:nth-child(odd) { background: #fffecf; }
        .totals-row td {
            font-weight: bold;
            border: none;
            padding-top: 20px;
        }
        .total-amount { color: green; }
        .creator { margin-top: 30px; text-align: right; }
    </style>
</head>
<body>

<div class="container">
<h1>Public Library Expansion Project</h1>
<h2>Cost Estimates</h2>

<table>
<tr>
    <th>Expenditures</th>
    <th>Estimated Cost</th>
    <th>10% Increase</th>
    <th>15% Increase</th>
    <th>20% Increase</th>
</tr>

<?php
$total = $total10 = $total15 = $total20 = 0;

foreach ($items as $row) {
    $name = $row[0];
    $cost = $row[1];

    $inc10 = increase($cost, 1.10);
    $inc15 = increase($cost, 1.15);
    $inc20 = increase($cost, 1.20);

    $total += $cost;
    $total10 += $inc10;
    $total15 += $inc15;
    $total20 += $inc20;

    echo "<tr>
            <td>$name</td>
            <td>" . formatMoney($cost) . "</td>
            <td>" . formatMoney($inc10) . "</td>
            <td>" . formatMoney($inc15) . "</td>
            <td>" . formatMoney($inc20) . "</td>
          </tr>";
}
?>

<tr class="totals-row">
    <td>Total Expenditures:</td>
    <td class="total-amount"><?php echo formatMoney($total); ?></td>
    <td class="total-amount"><?php echo formatMoney($total10); ?></td>
    <td class="total-amount"><?php echo formatMoney($total15); ?></td>
    <td class="total-amount"><?php echo formatMoney($total20); ?></td>
</tr>
</table>

<p class="creator">Created by: Tayros</p>
</div>

</body>
</html>


