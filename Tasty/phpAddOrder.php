<?php

$numOfPeople = $_POST['numOfPeople']; // catch the num of people from the html file
$chooseRestaurant = $_POST['chooseRestaurant']; // catch the restaurant from the html file
$DateImEating = $_POST['DateImEating']; // catch the date from the html file
$hourImArraiving = $_POST['hourImArraiving']; // catch the hour from the html file

$con  = mysqli_connect("localhost", "root", "", "saveyourplate2");
// check connection

if(mysqli_connect_errno())
{
    echo "Faild to connect to my sql: " . mysqli_connect_errno();
}

$sql = "INSERT INTO orders (numberOfPeople,Restaurant,Date,Hour) VALUES ('$numOfPeople','$chooseRestaurant','$DateImEating','$hourImArraiving');";
mysqli_query($con,$sql);
header("Location:MyHomeAfterSign.html");

mysqli_close($con);

?>