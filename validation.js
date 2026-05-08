 function validate (){
 let first_name=document.getElementById("first_name").value;
        if(first_name=="")
    {
        document.getElementById("first_name_error").innerText="***please enter the first name";
        return false;
    }
  
let last_name=document.getElementById("last_name").value;
        if(last_name=="")
    {
        document.getElementById("last_name_error").innerText="***please enter the lastname";
        return false;
    }
  



let email=document.getElementById("email").value;
        if(email=="")
    {
        document.getElementById("email_error").innerText="***please enter the email";
        return false;
    }

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!email.match(mailformat))
    {
        document.getElementById("email_error").innerText ='Invalid email';
        return false;
    }

    
let password=document.getElementById("password").value;
        if(password=="")
    {
        document.getElementById("password_error").innerText="**please enter the password";
        return false;
    }

    if(password.length<6)
    { 
        alert("must be of 6 length");
    }

    return true;
}