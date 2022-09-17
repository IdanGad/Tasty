<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <a href="MyHomeAdmin.html" >Go back</a>
</body>
</html>

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
<th>userName</th>
<th>password</th>
<th>Email</th>
<th>phonenumber</th>
</tr> ";

while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>". $row['userName']."</td>";
    echo "<td>". $row['password']."</td>";
    echo "<td>". $row['Email']."</td>";
    echo "<td>". $row['phonenumber']."</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con)
?>
</body>
</html>