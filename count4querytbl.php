
<?php
include("db_connect.php");
$x="select count(sno) from query";
$y=mysqli_query($con,$x);

while($c=mysqli_fetch_array($y))
{
    
    echo $c[0];
    
}
?>
