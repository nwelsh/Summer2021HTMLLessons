<!-- September 1, 2021
Practice to make a submission
https://htmlpreview.github.io/?
-->

<!-- Sample HTML Form -->
<form method="post" action="subscriberform.php">
<textarea name="message"></textarea>
<input type="submit">
</form>

<?php
if($_POST["Message"]) {
mail("nicole17welsh@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>
