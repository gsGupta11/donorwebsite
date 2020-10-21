function validate() {
    var city =String(document.getElementById("city").value);
    var fname = String(document.getElementById("fname").value);
    var phone = String(document.getElementById("phone").value);
    var blood = String(document.getElementById("blood").value);
    var textdata = String(document.getElementById("textdata").value);
    if (fname.length ==0 || phone.length==0 || textdata.length==0){
        window.alert("Input Fields cannot be empty");
        return false;
    }
    else if(phone.length!=10){
        window.alert("Phone Number should contain only 10 numbers.");
        return false;
    }
    else{
        return true;
    }
}