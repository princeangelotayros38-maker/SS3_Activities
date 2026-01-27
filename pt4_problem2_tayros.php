<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfect Square Detection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            padding: 25px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .numbers {
            background: #f0f0f0;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            text-align: center;
        }

        .summary {
            margin-top: 15px;
            font-weight: bold;
            color: #444;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Perfect Squares (1–100)</h2>

    <div class="numbers">
        <?php
        $count = 0;
        $largest = null;
        $smallest = null;

        for ($num = 100; $num >= 1; $num--) {
            for ($i = 1; $i * $i <= $num; $i++) {
                if ($i * $i == $num) {
                    echo $num . " ";
                    $count++;

                    if ($largest === null) {
                        $largest = $num;
                    }
                    $smallest = $num;
                    break;
                }
            }
        }
        ?>
    </div>

    <div class="summary">
        Total Perfect Squares: <?php echo $count; ?><br>
        Largest Perfect Square: <?php echo $largest; ?><br>
        Smallest Perfect Square: <?php echo $smallest; ?>
    </div>
</div>

</body>
</html>
