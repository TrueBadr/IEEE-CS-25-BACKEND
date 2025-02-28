<?php
$admins=["Badr","Mahmoud","Asmaa"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username = $_POST['user'];
    echo "The Request Method is Post and Username is $username<br>";
    if (in_array($username, $admins))echo "This Username $username is Admin";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Check</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>
</body>
</html>
