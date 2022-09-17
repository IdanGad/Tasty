
// Thw website members
var member1 = {'Name': "idan",'Password': "111"};
var member2 = {'Name': "daniel",'Password': "222"};
var member3 = {'Name': "hen",'Password': "333"};
var member4 = {'Name': "avi",'Password': "444"};
var member5 = {'Name': "andreas",'Password': "555"};

// This is the array of the users
var membersArray = [];

membersArray.push(member1);
membersArray.push(member2);
membersArray.push(member3);
membersArray.push(member4);
membersArray.push(member5);

function checkAdmin()   
{
    var userName = document.getElementById('userName').value;
    var pass = document.getElementById('Password').value;
    var adminName = "HEN";
    var adminPass = "111";
    if(userName==adminName && pass==adminPass)
    {
        window.alert("Hi Hen! Welcome");
        location.href='MyHomeAdmin.html';
    }
    else
    {
        window.alert("You are not an Admin");
    }
}


// This function make sure that only the register users can login
function log() {
    var userName = document.getElementById('userName').value;
    var pass = document.getElementById('Password').value;
    var found = false;
    for(var a = 0; a<=membersArray.length;a++)
    {
        if (membersArray[a].Name==userName && membersArray[a].Password==pass)
        {
            window.alert("Hi "+userName+ " you logged in successfully!");
            location.href='MyHomeAfterSign.html';
            found = true;
            break;
        }
        else if (membersArray[a].Name==userName && membersArray[a].Password!=pass)
        {
            window.alert("Wrong password");
            found = true;
            break;
        }
        else if (membersArray[a].Name!=userName && membersArray[a].Password==pass)
        {
            window.alert("Wrong username");
            found = true;
            break;
        }
        if(a==membersArray.length-1)
        {
            window.alert("Sign up before log in please");
            location.href='SignUp.html';
        }
    }   

    
}




