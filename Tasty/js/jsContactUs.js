function btnContactUs()
{
userFirstName = document.getElementById("fname").value;
userLastName = document.getElementById("lname").value;
userParagraph = document.getElementById("subject").value;

if (userFirstName!="" && userLastName!="" && userParagraph!="")
{
    window.alert("Thank you for your time! ")
    location.href='MyHome.html';
}
else if(userFirstName=="" && userLastName=="" && userParagraph=="")
{
    window.alert("Fill in your data please")
}
else if (userFirstName=="")
{
    window.alert("Fill in your first name please")
}
else if (userLastName=="")
{
    window.alert("Fill in your last name please")
}
else
{
    window.alert("Tell me what's wrong")
}
    
}