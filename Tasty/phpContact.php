<?php

$firstName = $_POST['firstname']; // catch the first name from the html file
$lastName = $_POST['lastname']; // catch the last name from the html file
$subject = $_POST['subject']; // catch the subject from the html file


$con  = mysqli_connect("localhost", "root", "", "saveyourplate2");
// check connection

if(mysqli_connect_errno())
{
    echo "Faild to connect to my sql: " . mysqli_connect_errno();
}
if ($firstName!="" && $lastName!="" && $subject!="")
{
    $sql = "INSERT INTO contactus (firstName,lastName,subject) VALUES ('$firstName','$lastName','$subject');";
    mysqli_query($con,$sql);
    header("Location:MyHome.html");
}
else
{
    header("Location:ContactUsNotFillData.html");
}

mysqli_close($con);

?>