<script type="text/javascript">

userHtmlUserName=document.getElementById("UserName").innerHTML;
userHtmlPassword=document.getElementById("UserPassword").innerHTML;
userHtmlRePassword=document.getElementById("ReUserPassword").innerHTML;
userHtmlEmail=document.getElementById("userEmail").innerHTML;
userHtmlPhone=document.getElementById("phoneNumber").innerHTML;

</script>


<?php
$con  = mysqli_connect("localhost", "root", "", "saveyourplate2");
// check connection

if(mysqli_connect_errno())
{
    echo "Faild to connect to my sql: " . mysqli_connect_errno();
}

$userPHPUserName ='<script type="text/javascript">document.write(userHtmlUserName);</script>'; // catch the name from the html file

// this is my query to fetch the data from the database
// result variable holeds all the query data
$result = mysqli_query($con, "SELECT * FROM users");

$notInBase=0; // if this variable will be zero after the while loop, it means that the user is not in 
              // my database and i need to send him to "SignUp" page.

if(isset($_POST['user']))
{
    if(isset($_POST['password']))
    {
        while($row=mysqli_fetch_array($result))
        {
            // $_POST - belongs to the HTML file
            if($row['userName']==$_POST['user'] && $row['password']==$_POST['password'])
            {
                $notInBase=1;
                header("Location:MyHomeAfterSign.html");
            }        
        }   
        if($notInBase==0)
        {
            header("Location:SignUpIfNotFoundInDB.html");
        }
    }
}

mysqli_close($con);
?>