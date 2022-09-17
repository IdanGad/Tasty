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

$result = mysqli_query($con, "SELECT * FROM contactus");

echo "<table border='1'>
<tr> 
<th>firstName</th>
<th>lastName</th>
<th>subject</th>
</tr> ";

while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>". $row['firstName']."</td>";
    echo "<td>". $row['lastName']."</td>";
    echo "<td>". $row['subject']."</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con)
?>
</body>
</html>