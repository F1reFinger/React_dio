function returnEvenValues(array){
    let evenNums = [];
    for(let i = 0; i < array.length; i++){
        if(array[i] % 2 === 0){
            evenNums.push(array[i]);
        }
    }
    console.log("why is'n working", evenNums);
}
let array = [2, 3, 4, 5, 6, 7, 8];
returnEvenValues(array);
console.log("What i'm doing with my life??");