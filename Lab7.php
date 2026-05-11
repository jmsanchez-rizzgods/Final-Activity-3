<!DOCTYPE html>
<html>
<body>

<form method="post">
    Gender: 
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="submit">
</form>

<?php
if (isset($_POST['gender'])) {
    echo "Selected Gender: " . $_POST['gender'];
}
?>

</body>
</html>