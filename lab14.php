<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 14: Checkbox Input</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; padding: 40px; }
        .container { background: white; padding: 30px; border-radius: 10px; max-width: 500px; margin: auto; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h2 { color: #333; border-bottom: 2px solid #007bff; padding-bottom: 10px; }
        .input-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input[type="text"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        .checkbox-group { margin: 20px 0; background: #f9f9f9; padding: 15px; border-radius: 5px; }
        .checkbox-item { margin-bottom: 8px; display: flex; align-items: center; }
        .checkbox-item input { margin-right: 10px; }
        .btn { background: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; width: 100%; font-size: 16px; }
        .btn:hover { background: #0056b3; }
        .output { margin-top: 20px; padding: 15px; background: #e7f3ff; color: #004085; border-radius: 5px; border-left: 5px solid #007bff; }
    </style>
</head>
<body>

<?php
$name = $_POST['name'] ?? '';
$section = $_POST['section'] ?? '';
$selected_hobbies = $_POST['hobbies'] ?? []; 

$display_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($selected_hobbies)) {

        $hobbies_string = implode(", ", $selected_hobbies);
        $display_message = "Hello $name ($section)! Your hobbies are: $hobbies_string.";
    } else {
        $display_message = "Please select at least one hobby.";
    }
}
?>

<div class="container">
    <h2>Lab 14: Hobby Selection</h2>

    <form action="" method="POST">
        <div class="input-group">
            <label>Full Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
        </div>

        <div class="input-group">
            <label>Section:</label>
            <input type="text" name="section" value="<?php echo htmlspecialchars($section); ?>" required>
        </div>

        <div class="checkbox-group">
            <label>Select your Hobbies:</label>
            

            <div class="checkbox-item">
                <input type="checkbox" name="hobbies[]" value="Reading" 
                <?php if(in_array("Reading", $selected_hobbies)) echo "checked"; ?>> Reading
            </div>

            <div class="checkbox-item">
                <input type="checkbox" name="hobbies[]" value="Gaming" 
                <?php if(in_array("Gaming", $selected_hobbies)) echo "checked"; ?>> Gaming
            </div>

            <div class="checkbox-item">
                <input type="checkbox" name="hobbies[]" value="Coding" 
                <?php if(in_array("Coding", $selected_hobbies)) echo "checked"; ?>> Coding
            </div>

            <div class="checkbox-item">
                <input type="checkbox" name="hobbies[]" value="Traveling" 
                <?php if(in_array("Traveling", $selected_hobbies)) echo "checked"; ?>> Traveling
            </div>
        </div>

        <button type="submit" class="btn">Submit Selections</button>
    </form>

    <?php if ($display_message): ?>
        <div class="output">
            <?php echo htmlspecialchars($display_message); ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>