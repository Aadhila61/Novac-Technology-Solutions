var count=0;


function increaseCount(button){
    
        count+=1;
    document.getElementById("count").innerText=count;
}

function saveCount(){
  
    // store.push(count);
    var a=count;
    document.getElementById("result").innerText +=a +"-";
    count=0;
    document.getElementById("count").innerText=count;
}