<!DOCTYPE html>
<html>
<body>

<form method="post">
    Course:
    <select name="course">
        <option value="BSIT">BSIT</option>
        <option value="BSCE">BSCE</option>
        <option value="BSCS">BSCS</option>
    </select>
    <input type="submit">
</form>

<?php
if (isset($_POST['course'])) {
    echo "Selected Course: " . $_POST['course'];
}
?>

</body>
</html>