function validate(){
    var fname=document.getElementById("first-name").value;
    if(fname==""||fname==null){
        document.getElementById("name").innerHTML="*enter the name*";
        // return false;
    }
    else{
        document.getElementById("name").innerHTML="";
    }
    var regno=document.getElementById("REG-NO").value;
    if(regno==""||regno==null){
        document.getElementById("RegNo").innerHTML="*enter the register number*";
        // return false;
    }
    else{
        document.getElementById("RegNo").innerHTML="";
    }
    var email=document.getElementById("email").value;
    if(email==""||email==null){
        document.getElementById("mail").innerHTML="*enter the mail ID*";
        // return false;
    }
    else{
        document.getElementById("mail").innerHTML="";
    }
    var dept=document.getElementById("Department").value;
    if(dept==""||dept==null){
        document.getElementById("Dept").innerHTML="*enter the department name*";
        // return false;
    }
    else{
        document.getElementById("Dept").innerHTML="";
    }
    var year=document.getElementById("YEAR").value;
    if(year==""||year==null){
        document.getElementById("Year").innerHTML="*enter the year of studying*";
        // return false;
    }
    else{
        document.getElementById("Year").innerHTML="";
    }
    var dadname=document.getElementById("FATHERNAME").value;
    if(dadname==""||dadname==null){
        document.getElementById("father").innerHTML="*enter father's name*";
        // return false;
    }
    else{
        document.getElementById("father").innerHTML="";
    }
    var momname=document.getElementById("MOTHERNAME").value;
    if(momname==""||momname==null){
        document.getElementById("mother").innerHTML="*enter mother's name*";
        // return false;
    }
    else{
        document.getElementById("mother").innerHTML="";
    }
    var fnumber=document.getElementById("FATHERNUMBER").value;
    if(fnumber==""||fnumber==null){
        document.getElementById("fno").innerHTML="*enter father's mobile number*";
        // return false;
    }
    else{
        document.getElementById("fno").innerHTML="";
    }
    var mnumber=document.getElementById("MOTHERNUMBER").value;
    if(mnumber==""||mnumber==null){
        document.getElementById("mno").innerHTML="*enter mother's mobile number*";
        // return false;
    }
    else{
        document.getElementById("mno").innerHTML="";
    }
    // var gender1=document.getElementById("radio1").value;
    // var gender2=document.getElementById("radio2").value;
    // if(!checked.test(gender1)){
    //     document.getElementById("Radio").innerHTML="select any one";
    // }
    // else{
    //     document.getElementById("Radio").innerHTML="";
    // }
    var add=document.getElementById("w3review").value;
    if(add==""||add==null){
        document.getElementById("address").innerHTML="*enter the address*";
    }
    else{
        document.getElementById("address").innerHTML="";
    }
    var cityname=document.getElementById("city").value;
    if(cityname==""||cityname==null){
        document.getElementById("City").innerHTML="*enter city name*";
    }
    else{
        document.getElementById("City").innerHTML="";
    }
    var Roomno=document.getElementById("roomno").value;
    if(Roomno==""||Roomno==null){
        document.getElementById("RoomNo").innerHTML="*enter room number*";
    }
    else{
        document.getElementById("RoomNo").innerHTML="";
        return true;
    }
    return false;
}