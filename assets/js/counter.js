var interval;
var displayh2=document.getElementById('h2')
var a=0;
function timer(){
    displayh2.innerHTML=a;
    a++;
    if(a==40){
        clearInterval(interval)
        displayh2.innerHTML=a+'+';
        
    }
}
function start() {
    interval = setInterval(timer, 30);
}
window.onload=start()









