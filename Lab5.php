<!DOCTYPE html>
<html>
<body>

<form method="post">
    Name: <input type="text" name="name"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "Name: " . $name;
}
?>

</body>
</html>