<form method="post">
userid<input type="text" name="user"><br>
password<input type="password" name="pass">
<br>
<input type="submit" name="sub"><br>
</form><?php
if (isset($_post['sub']))
{$name=$_post['user'];
$password=$_post['pass'];
echo "your name is $name"."your password is $password";

}
?>
