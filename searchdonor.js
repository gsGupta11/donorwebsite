function validate() {
    var city = document.getElementById("city");
    city = city.value;
    if (city=="Any"){
        window.alert("Are you sure you want search donor in any city!");    
        return true;
    }
}