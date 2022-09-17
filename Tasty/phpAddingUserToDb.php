<?php

$username = $_POST['NameOfNewUser']; // catch the name from thr html file
$password = $_POST['pswOfNewUser']; // catch the password from thr html file
$passwordRepeted = $_POST['psw-repeat']; // catch the password from thr html file
$userEmail = $_POST['emailOfNewUser']; // catch the name from thr html file
$userPhone = $_POST['PhoneNumberOfNewUser']; // catch the password from thr html file


$con  = mysqli_connect("localhost", "root", "", "saveyourplate2");
// check connection

if(mysqli_connect_errno())
{
    echo "Faild to connect to my sql: " . mysqli_connect_errno();
}


if($username!="")
{
    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)==true)
    {
        if($password==$passwordRepeted)
        {
            $sql = "INSERT INTO users (userName,password,Email,phonenumber) VALUES ('$username','$password','$userEmail','$userPhone');";
            mysqli_query($con,$sql);
            header("Location:MyHomeAfterSign.html");
        }
        else
        {
            header("Location:SignUpSamePass.html");
        }
    }
    else
    {
        header("Location:SignUpNotEmail.html");
    }
}

mysqli_close($con);

?>

