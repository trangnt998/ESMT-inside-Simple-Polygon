function set_state(){
    if(document.getElementById("button").getAttribute("value")){
        if(document.getElementById("button").getAttribute("value")== "true"){
            document.getElementById("unit_1").innerHTML = "Degree";
            document.getElementById("unit_1").setAttribute("value", 180);
            document.getElementById("unit_2").innerHTML = "Radian";
            document.getElementById("unit_2").setAttribute("value", 3.14);
            

        }
        else{
            document.getElementById("unit_2").innerHTML = "Degree";
            document.getElementById("unit_2").setAttribute("value", 180);
            document.getElementById("unit_1").innerHTML = "Radian";
            document.getElementById("unit_1").setAttribute("value", 3.14);
        }

    }

}