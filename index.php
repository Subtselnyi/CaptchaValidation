<?php
session_start();
if (!empty($_POST['submit'])) {
    if (!strcasecmp($_POST['vcode'], $_SESSION['vcode'])) {
        echo "THE CAPTCHA IS THE SAME!";
    }
}
?>
<p>please type in the varification code:<br/></p>
<img src="verification.php" />
<form action="" method = "POST">
    <span> verification code:</span><input name="vcode" type="text" value="" />
    <input name = "submit" type="submit" value="submit" />
</form>