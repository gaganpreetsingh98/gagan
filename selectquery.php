<table border='3px'>
<tr>
<th>sno</th>
<th>name</th>
<th>password</th>
<th>email</th>
</tr>
<?php 
include("db.php");
$x="select * from  signup";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
    echo "<tr>";
    echo "<td>".$c[0]."</td>";
    echo "<td>".$c['name']."</td>";
    echo "<td>".$c['pass']."</td>";
    echo"<td>".$c['email']."</td>";
    echo "</tr>";
}
?>
</table>