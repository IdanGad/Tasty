<?php

$con  = mysqli_connect("localhost", "root", "", "saveyourplate2");
// check connection

if(mysqli_connect_errno())
{
    echo "Faild to connect to my sql: " . mysqli_connect_errno();
}

// this is my query to fetch the data from the database
// result variable holeds all the query data
$result = mysqli_query($con, "SELECT * FROM users");

if(isset($_POST['user']))
{
    if(isset($_POST['password']))
    {
        while($row=mysqli_fetch_array($result))
        {
            // $_POST - belongs to the HTML file
            if($row['userName']==$_POST['user'] && $row['password']==$_POST['password'])
            {
                $stmt = $conn->prepare("insert into res(username,password) values(?,?)");
                $stmt->bind_param("ssssi",username,password);
                $stmt->execute();
                $stmt->close();
                
            }
                
        }
    }
}
mysqli_close($con);

?>

