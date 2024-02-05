function displayTime(){
    var dateTime = new Date();
    var hrs = dateTime.getHours();
    var min = dateTime.getMinutes();
    var sec = dateTime.getSeconds();
    var session = document.getElementById('session');
    var today = new Date();
    // var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

    if(hrs >= 12){
        session.innerHTML = 'PM';
    }else{
        session.innerHTML = 'AM';
    }

    if(hrs > 12){
        hrs = hrs - 12;
    }

    function padTo2Digits(num) {
        return num.toString().padStart(2, '0');
      }

    document.getElementById('hours').innerHTML = padTo2Digits(hrs);
    document.getElementById('minutes').innerHTML = padTo2Digits(min);
    document.getElementById('seconds').innerHTML = padTo2Digits(sec);
    // document.getElementById('date').innerHTML = padTo2Digits(date);
}
setInterval(displayTime, 10); 

