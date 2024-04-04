// function getRndInteger(min, max) {
//   var x= Math.floor(Math.random() * (max - min)) + min;
//   return x;
// }
// document.getElementById("demo").innerText =+x;
function randomnumber(){
  var randomvalues=Math.floor((Math.random() * 13) + 1);

  var total=parseInt(document.getElementById('total').innerText);

  var newtotal=total+randomvalues;

  document.getElementById('random').innerText +="-" +randomvalues ;
  document.getElementById('total').innerText=newtotal

if(newtotal>=21){
  document.getElementById('addrandom').disabled=true;
 
    alert("You are out! Reload and try again");


}

}
