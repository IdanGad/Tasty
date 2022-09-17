
function btnSignUp(){
    newUseremail = document.getElementById('userEmail').value;   
    newUserName = document.getElementById('UserName').value; 
    newUserePassword = document.getElementById('UserPassword').value;
    newUserRepetPassword = document.getElementById('ReUserPassword').value;

    let patternEmail = /^[^ ]+@[^]+\.[a-z]{2,3}$/; // this is a general pattern for email

    // If every thing is OK
    if ((newUserePassword==newUserRepetPassword) && newUserName!="" && newUseremail.match(patternEmail))
    {
        window.alert("hi "+newUserName+", welcome. ew added you to our database");
        location.href='MyHomeAfterSign.html';     
    }
    // somthig is wrong, else if for checking what is wrong
    else if(newUserePassword!=newUserRepetPassword)
    {
        window.alert("Passwords not matching");
        location.href='SignUp.html';
    }   
    else if (newUserName=="" )
    {
        window.alert("Fill your name");
        location.href='SignUp.html';
    }
    else
    {
        window.alert("Email not in the right format");
        location.href='SignUp.html';
    }   
}