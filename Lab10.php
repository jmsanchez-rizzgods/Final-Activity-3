<!DOCTYPE html>
<html>
<body>

<form method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Gender: <input type="radio" name="gender" value="Male"> M 
        <input type="radio" name="gender" value="Female"> F<br>
    Course: <select name="course">
                <option value="BSIT">BSIT</option><br>
                <option value="BSCS">BSCS</option><br>
                <option value="BSCE">BSCE</option><br>
            </select><br>
    Message: <textarea name="message"></textarea><br>
        <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['name'])) { echo "Name required! <br>"; }
    else { echo "Success: " . htmlspecialchars($_POST['name']) . "<br>"; }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format <br>";
    } else {
        echo "Email: " . htmlspecialchars($email) . "<br>";
    }
}

if (isset($_POST['gender'])) {
    echo "Selected Gender: " . $_POST['gender'] . "<br>";
}

if (isset($_POST['course'])) {
    echo "Selected Course: " . $_POST['course'] . "<br>";
}

if (isset($_POST['message'])) {
    echo "Message: " . htmlspecialchars($_POST['message']) . "<br>";
}

?>

</body>
</html>