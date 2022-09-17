
var restaurantName = "misada";


function topOne(){
        location.href='https://13tv.co.il/yummies/the-next-restaurant-of-israel/season-01/the-restaurants/kilometrag/'; 
}

function topTwo(){
    location.href='https://www.segevchef.com/restaurants/segev-kosher/';
}

function topThree(){
    location.href='https://raisa.co.il/';
}

function setResName(){
    window.alert("rest one clicked");
}

var x = document.getElementById()

function sendLoginMessage()
{
    window.alert("Please login / signin first");
}

function saveYourPlate()
{
    var numOfPeopleX = document.getElementById('numOfPeople').value;
    var chooseRestaurantX = document.getElementById('chooseRestaurant').value;
    var DateImEatingX = document.getElementById('DateImEating').value;
    var hourImArraivingX = document.getElementById('hourImArraiving').value;

    if(numOfPeopleX!="מספר אנשים" && chooseRestaurantX!="בחר מסעדה" && DateImEatingX!="תאריך" && hourImArraivingX!="שעה")
    {
        window.alert(" אז קבענו ל" +DateImEatingX+" ב "+chooseRestaurantX+" בשעה "+hourImArraivingX)
        location.href='MyHomeAfterSign.html';
    }
    else{
        if(numOfPeopleX=="מספר אנשים"){
            window.alert("נא לבחור מספר אנשים");
        }           else if(chooseRestaurantX=="בחר מסעדה"){
            window.alert("נא לבחור מסעדה");
        }else if(DateImEatingX=="תאריך"){
            window.alert("נא לבחור תאריך");
        }else{
            window.alert("נא לבחור שעה");
        }
    }
    
    
}