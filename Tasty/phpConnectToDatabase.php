<?php
$con  = mysqli_connect("localhost", "root", "", "saveyourplate2");
// check connection

if(mysqli_connect_errno())
{
    echo "Faild to connect to my sql: " . mysqli_connect_errno();
}

$result = mysqli_query($con, "SELECT * FROM users");

echo "<table border='1'>
<tr> 
<th>UserName</th>
<th>Password</th>
</tr> ";

while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>". $row['userName']."</td>";
    echo "<td>". $row['password']."</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con)
?>
</body>
</html>
