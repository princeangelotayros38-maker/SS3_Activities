<?php
// Cost data
$items = [
    ["Lumber", 150000],
    ["Concrete", 78000],
    ["Drywall", 69000],
    ["Paint", 12000],
    ["Miscellaneous", 20000]
];

function formatMoney($amt) {
    return "$ " . number_format($amt, 2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Public Library Expansion Project</title>
    <style>
        body {
            background: #a9e884;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            padding: 30px;
            border: 3px solid black;
            background: #b0d69a;
        }

        h1 {
            color: #0346d8;
            text-align: center;
        }

        h2 {
            color: #b20d0d;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            text-align: center;
            font-size: 18px;
        }

        th {
            background: #e8aa38;
            padding: 12px;
            border: 1px solid black;
        }

        td {
            padding: 10px;
            border: 1px solid black;
        }

        tr:nth-child(even) {
            background: #cbf0ff;
        }

        tr:nth-child(odd) {
            background: #fffecf;
        }

        .totals-row td {
            font-weight: bold;
            background: none;
            border: none;
            padding-top: 25px;
        }

        .total-amount {
            color: green;
        }

        .creator {
            margin-top: 40px;
            text-align: right;
            padding-right: 40px;
        }
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
        $total = 0;
        $total10 = 0;
        $total15 = 0;
        $total20 = 0;

        foreach ($items as $row) {
            $name = $row[0];
            $cost = $row[1];

            $inc10 = $cost * 1.10;
            $inc15 = $cost * 1.15;
            $inc20 = $cost * 1.20;

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
            <td class="total-amount"><?= formatMoney($total) ?></td>
            <td class="total-amount"><?= formatMoney($total10) ?></td>
            <td class="total-amount"><?= formatMoney($total15) ?></td>
            <td class="total-amount"><?= formatMoney($total20) ?></td>
        </tr>
    </table>

    <p class="creator">Created by: Tayros</p>
</div>

</body>
</html>
