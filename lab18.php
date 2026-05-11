<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 18: GET vs POST Comparison</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { background: white; padding: 20px; border-radius: 8px; max-width: 500px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin: auto; }
        .form-section { border: 1px solid #ddd; padding: 15px; margin-bottom: 20px; border-radius: 4px; }
        h3 { margin-top: 0; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn-get { background: #17a2b8; color: white; border: none; padding: 10px; cursor: pointer; width: 100%; }
        .btn-post { background: #6f42c1; color: white; border: none; padding: 10px; cursor: pointer; width: 100%; }
    </style>
</head>
<body>

<div class="container">
    <h2>Method Comparison</h2>


    <div class="form-section">
        <h3>Form A: GET Method</h3>
        <p><small>Used for non-sensitive data like searches.</small></p>
        <form action="" method="GET">
            <label>Search Query:</label>
            <input type="text" name="search_term">
            <button type="submit" class="btn-get">Submit via GET</button>
        </form>
    </div>


    <div class="form-section">
        <h3>Form B: POST Method</h3>
        <p><small>Used for sensitive data like passwords.</small></p>
        <form action="" method="POST">
            <label>Secret Code:</label>
            <input type="text" name="secret_code">
            <button type="submit" class="btn-post">Submit via POST</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search_term'])) {
        echo "<p><strong>PHP received via GET:</strong> " . htmlspecialchars($_GET['search_term']) . "</p>";
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p><strong>PHP received via POST:</strong> " . htmlspecialchars($_POST['secret_code']) . "</p>";
    }
    ?>
</div>

</body>
</html>