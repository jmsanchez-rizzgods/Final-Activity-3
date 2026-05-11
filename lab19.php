<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 19: Form File</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { background: white; padding: 20px; border-radius: 8px; max-width: 400px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin: auto; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { margin-top: 20px; padding: 10px 15px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
    </style>
</head>
<body>

<div class="container">
    <h2>User Registration</h2>
    <!-- The action attribute sends the data to process.php -->
    <form action="process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Send to Processor</button>
    </form>
</div>

</body>
</html>