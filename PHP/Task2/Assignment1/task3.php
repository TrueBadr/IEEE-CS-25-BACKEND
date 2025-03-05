<?php
$admins = ["Badr", "Mahmoud", "Asmaa"];
if($_SERVER['REQUEST_METHOD']=='POST')
{
    foreach ($admins as $admin)
    {
        if ($_POST['user']==$admin)
        {
            echo "The Request Method is Post and Name is ".$_POST['user']."\n";
            echo "This Name ".$_POST['user']." is Admin";
            break;
        }
    }
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
