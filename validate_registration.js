function validateform(){
var name=document.registerform.name.value;
var password=document.registerform.password.value;
var username=document.registerform.username.value;
var email=document.registerform.email.value;
var phone=document.registerform.phone.value;
var haserror = 0;
if (isNaN(phone)){
  document.getElementById("number_error").innerHTML="Enter Numeric value only";
  haserror = 1;
}
if (username.indexOf(' ') !== -1) {

	 document.getElementById("username_error").innerHTML="Username can't contain space.";
	  haserror = 1;
 }
if (name==null || name==""){

	  document.getElementById("name_error").innerHTML="Name can't be blank";

  haserror = 1;
}
else {
  document.getElementById("name_error").innerHTML="";
}

 if (password==null || password==""){
document.getElementById("password_error").innerHTML="must be filled up";
  haserror = 1;
}
else {
  document.getElementById("password_error").innerHTML="";
}

 if (username==null || username==""){
	document.getElementById("username_error").innerHTML="must be filled up";
  haserror = 1;
}
else {
  document.getElementById("username_error").innerHTML=" must be filled up";
}
if (email==null || email==""){
document.getElementById("email_error").innerHTML=" ";
  haserror = 1;
}
else {
  document.getElementById("email_error").innerHTML=" must be filled up";
}

if (phone==null || phone==""){
document.getElementById("number_error").innerHTML="must be filled up";
  haserror = 1;
}
else {
  document.getElementById("number_error").innerHTML="";
}



 if(password.length<8){
	document.getElementById("password_error").innerHTML="Password must be at least 8 characters long.";
  haserror = 1;
}
 if(username.length<6){
document.getElementById("username_error").innerHTML="Username must be at least 6 characters long.";
  haserror = 1;
}

for(i = 0 ; i<9 ; i++)
{
	if(name.indexOf(i)!==-1)
	{
		document.getElementById("name_error").innerHTML="Name must not be numeric.";
		haserror=1;
		break;
	}

}
if email()




}