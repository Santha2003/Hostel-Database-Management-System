function validate()
{
    let  x=document.getElementById("name").value;
    let y=document.getElementById("password").value;
    let b=document.getElementById("pswd");
    let a=document.getElementById("pswdError");
    // let z=/^[a-zA-z0-9@]{3,10}$/;
   if(x=="")
   {
     b.innerHTML="*User name must be filled out*";
   }
   if(x.length>15)
   {
       b.innerHTML="*User name does not greater than 15 characters";
   }
   if(y=="")
   {
     a.innerHTML="*password must be filled out*";
   }
   if(y.length>15)
   {
      a.innerHTML="password does not greater than 15 characters";
   }
}

