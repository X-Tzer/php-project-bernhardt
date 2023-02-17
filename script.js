// alert("hello from js");
function validate(){
    var firstname=document.getElementById("firstname").value;
    var lastname=document.getElementById("lastname").value;
    var phone=document.getElementById("phone").value;
    var mail=document.getElementById("email").value;
    var password=document.getElementById("password").value;
    var username=document.getElementById("username").value;
    var flag=0;
    var flds="";
    // alert(firstname+" "+lastname+" "+mail+" "+password+" "+username );

    if(firstname ==""  || firstname == null || firstname.length == 0){
        flag=1;
        flds +="firstname" +",";
    }
    if(lastname ==""  || lastname==null || lastname.length == 0){
        flag=1;
        flds +=" lastname"+","
    }
    if(mail == ""  || mail == null|| mail.length == 0){
        flag=1;
        flds +=" email"+","
    }
    // if(mail.indexOf("@")){
    //     alert("Invalid email");
    // }
    if(password == ""  || password==null ||password.length==0){
        flag=1;
        flds +=" password"+","
    }
    if(username==""  || username==null || username.length==0){
        flag=1;
        flds +=" username"+",";
    }
    if(phone==""  || phone==null || phone.length==0){
        flag=1;
        flds +=" phone";
    }
    if(flag==1){
        var msg = "* Please fill these fields: " +flds;
        document.getElementById("error").innerText=msg;
        return false;
    }
    return true;
    // alert(firstname);
}