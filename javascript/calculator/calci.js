function addNumbers() {

    // Get the values from the textboxes and convert them to numbers
    var num1 = parseFloat(document.getElementById('num1').value);
    var operator = document.getElementById("operator").value;
    var num2 = parseFloat(document.getElementById('num2').value);
    var result;

    try{
        text =  eval(num1 +operator +num2);
    }
    catch(error){
        text="invalid syntax";
    }
 
    document.getElementById('result').innerHTML = 'The result is: ' +text;
}


