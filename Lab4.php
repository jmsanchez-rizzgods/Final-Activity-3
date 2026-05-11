<!DOCTYPE html>
<html>
<body>

<form method="post">
  Name: <input type="text" name="name"><br>
  Email: <input type="text" name="email"><br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])) {
        echo "Name is required, ";
    }
    else{
        echo "Name: " . $_POST['name'] . ", ";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["email"])) {
        echo "Email is required";
    }
    else{
        echo "Email: " . $_POST["email"];
    }
}
?>


</body>
</html>