const CurrentNumberWrapper = document.getElementById("numeral");
var currentNumber = 0;

function decrement(){
    currentNumber = currentNumber - 1;
    console.log("CurrentNumber:", currentNumber);
    CurrentNumberWrapper.innerHTML() = currentNumber;
}
function increment(){
    currentNumber = currentNumber + 1;
    console.log("CurrentNumber:", currentNumber);
    CurrentNumberWrapper.innerHTML() = currentNumber;
}