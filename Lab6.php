<!DOCTYPE html>
<html>
<body>

<form method="post">
    Email: <input type="text" name="email"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        echo "Email: " . htmlspecialchars($email);
    }
}
?>

</body>
</html>