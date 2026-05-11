<!DOCTYPe html>
<html>
<body>

<form method="post">
    Message:<br>
    <textarea name="message"></textarea><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['message'])) {
    echo "Message: " . htmlspecialchars($_POST['message']);
}
?>

</body>
</html>