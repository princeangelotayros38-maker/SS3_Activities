<?php

    $hourlyRate = 100;
    $hoursPerDay = 8;
    $daysPerMonth = 26;

    $netIncome = $hourlyRate * $hoursPerDay * $daysPerMonth;

    if ($netIncome <= 15000) {
        $tax = 0;
    }
    else if ($netIncome <= 30000) {
        $tax = ($netIncome - 15000) * 0.05;
    }
    else {
        $tax = (15000 * 0.05) + (($netIncome - 30000) * 0.10);
    }


    $incomeAfterTax = $netIncome - $tax;

    echo "Hourly Rate: $" . $hourlyRate . "<br>";
    echo "Monthly Net Income: $" . $netIncome . "<br>";
    echo "Tax: $" . $tax . "<br>";
    echo "Income After Tax: $" . $incomeAfterTax;

?>
