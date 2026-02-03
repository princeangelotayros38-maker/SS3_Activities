<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            width: 400px;
            margin: 60px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 6px 0 15px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #0056b3;
        }

        .output {
            margin-top: 20px;
            background: #f1f1f1;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Information</h2>

    <form method="POST">
        <label>First Name:</label>
        <input type="text" name="firstname" required>

        <label>Middle Name:</label>
        <input type="text" name="middlename">

        <label>Last Name:</label>
        <input type="text" name="lastname" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>Address:</label>
        <textarea name="address" required></textarea>

        <label>Contact Number:</label>
        <input type="text" name="contact" required>

        <button type="submit" name="addstudent">Submit</button>
    </form>

    <?php
        if (isset($_POST['addstudent'])) {
            echo "<div class='output'>";
            echo "<strong>Your first name is:</strong> " . $_POST['firstname'] . "<br>";
            echo "<strong>Your middle name is:</strong> " . $_POST['middlename'] . "<br>";
            echo "<strong>Your last name is:</strong> " . $_POST['lastname'] . "<br>";
            echo "<strong>Your age is:</strong> " . $_POST['age'] . "<br>";
            echo "<strong>Your address is:</strong> " . $_POST['address'] . "<br>";
            echo "<strong>Your contact number is:</strong> " . $_POST['contact'] . "<br>";
            echo "</div>";
        }
    ?>
</div>

</body>
</html>

