<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 13: Password Input</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { background: white; padding: 20px; border-radius: 8px; max-width: 400px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .hint { font-size: 0.85em; color: #666; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 15px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <?php
    // Logic: Capture the username for stickiness, but NOT the password.
    $username = $_POST['username'] ?? '';
    
    // Check if the form was submitted to display a success message
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p style='color: green;'>Form submitted securely via POST.</p>";
    }
    ?>

    <div class="container">
        <h2>Secure Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            
            <!-- Sticky Username -->
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($username); ?>">

            <!-- Password Input (NOT sticky) -->
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <div class="hint">Characters are masked for your privacy.</div>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>