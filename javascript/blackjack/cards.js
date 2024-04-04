let rd1=Math.floor((Math.random() * 13) + 1);
let rd2=Math.floor((Math.random() * 13) + 1);
var randomarr=[rd1,rd2];
let blackjack=true
let isalive=false


function randomfunction(){
    let total=0;
    for(let i=0;i<randomarr.length;i++){
        total+=randomarr[i];
        document.getElementById("demo1").innerHTML+= " " +randomarr[i];
    }
    document.getElementById('total').innerText=total;
if(total>21){
    document.getElementById("word").innerText=" You lost ";
    isalive=true;
    blackjack=false
}
else if(total==21){
    document.getElementById("word").innerText=" you win the game";
    blackjack=false
}
else{
    document.getElementById("word").innerText="Add card";
}

}
function addvalue(){
    if(isalive===false && blackjack===true){

    let randomvalue=Math.floor((Math.random() * 13) + 1);
    randomarr.push(randomvalue);
    document.getElementById("demo1").innerHTML=[];
    randomfunction();

}
}



