<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 15: Form Reset Button</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { 
            background: white; 
            padding: 20px; 
            border-radius: 8px; 
            max-width: 400px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
            margin: auto;
        }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input { 
            width: 100%; 
            padding: 8px; 
            margin-top: 5px; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            box-sizing: border-box; 
        }
        .button-row { display: flex; gap: 10px; margin-top: 15px; }
        .btn-submit { background-color: #007bff; color: white; border: none; padding: 10px; border-radius: 4px; cursor: pointer; flex: 2; }
        .btn-reset { background-color: #6c757d; color: white; border: none; padding: 10px; border-radius: 4px; cursor: pointer; flex: 1; }
        .btn-submit:hover { background-color: #0056b3; }
        .btn-reset:hover { background-color: #5a6268; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Usability Test: Reset Button</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" id="full_name">

            <label for="comments">Comments:</label>
            <input type="text" name="comments" id="comments">

            <div class="button-row">
                <!-- Submit Button: Sends data to the server -->
                <input type="submit" value="Submit Data" class="btn-submit">
                
                <!-- Lab 15: Reset Button: Clears the UI locally -->
                <input type="reset" value="Clear" class="btn-reset">
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    }
    ?>

</body>
</html>