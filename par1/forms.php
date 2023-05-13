<form action = "forms.php" method = "GET">
First Name: <input type="text" name="fuser">
<br>
Last Name: <input type="text" name="luser">
<br>
<input type="Submit">
</form>

<?php

echo $_GET["fuser"];
echo $_GET["luser"];

?>