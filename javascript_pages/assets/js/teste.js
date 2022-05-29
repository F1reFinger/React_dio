let count = 0;
const Current_Number = document.getElementById('currentNumber');

function increment(){
    count++;
    Current_Number.innerHTML = count;
}
function decrement() {
    count--;
    Current_Number.innerHTML = count;
}