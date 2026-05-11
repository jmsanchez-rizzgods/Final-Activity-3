<?php
/* * LAB 11: Self-Processing Form
 * Why htmlspecialchars($_SERVER["PHP_SELF"]) is safer:
 * 1. It prevents Reflected XSS attacks.
 * 2. It escapes special characters (like <, >, ") into HTML entities.
 * 3. This ensures that any malicious code injected into the URL 
 * is rendered as plain text rather than executed by the browser.
 */
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="user_input">Enter Data:</label>
    <input type="text" id="user_input" name="user_input">
    <button type="submit">Submit</button>
</form>