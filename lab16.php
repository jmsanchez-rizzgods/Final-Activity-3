<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 16: Number Input Validation</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { background: white; padding: 20px; border-radius: 8px; max-width: 400px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin: auto; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .error { color: #d9534f; background: #fdf7f7; padding: 10px; border-radius: 4px; margin-bottom: 15px; border: 1px solid #d9534f; }
        .success { color: #3c763d; background: #dff0d8; padding: 10px; border-radius: 4px; margin-bottom: 15px; border: 1px solid #d6e9c6; }
        button { margin-top: 15px; padding: 10px 15px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
    </style>
</head>
<body>

<div class="container">
    <h2>Age Verification</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST['age'];


        if (empty($age)) {
            echo "<div class='error'>Error: Age field cannot be empty.</div>";
        } elseif (!is_numeric($age)) {

            echo "<div class='error'>Error: Please enter a valid number.</div>";
        } elseif ($age < 1 || $age > 120) {

            echo "<div class='error'>Error: Age must be between 1 and 120.</div>";
        } else {
            echo "<div class='success'>Success: Age $age is valid and accepted!</div>";
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="age">Enter Your Age:</label>
        <input type="text" name="age" id="age">
        <button type="submit">Verify Age</button>
    </form>
</div>

</body>
</html>