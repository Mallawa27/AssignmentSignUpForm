function validateForm(){
  var firstName=document.getElementById('firstName');
  var lastName=document.getElementById('lastName');
  var email=document.getElementById('email');
  var phone=document.getElementById('phoneNumber');
  var password=document.getElementById('password');
  var repeatPassword=document.getElementById('repeatPassword');
 
function validateField(field,fieldName,regex){
  if(field.value.trim()===''){
    alert(fieldName + " cannot be empty.");
    field.focus();
    return false;
  }else if(regex && !field.value.match(regex)){
    alert(fieldName + " is invalid.");
    field.focus();
    return false;
  }
  return true;

}

if(!validateField(firstName,"First Name",/^[a-zA-Z]+$/)) return false;
if(!validateField(lastName,"Last Name",/^[a-zA-Z]+$/)) return false;
if(!validateField(email,"Email",/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)) return false;
if(!validateField(phone,"Phone Number",/^\d{10}$/)) return false;
if(!validateField(password,"Passsword",/.{6,}/)) return false;

if(password.value !== repeatPassword.value){
  alert("Passwords do not match");
password.focus();
return false;
}
return true;
}