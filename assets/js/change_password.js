function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.current_password;
newPassword = document.frmChange.new_password;
confirmPassword = document.frmChange.repeat_password;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("current_password").innerHTML = "<p style='color:red'>required</p>";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("new_password").innerHTML = "<p style='color:red'>required</p>";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("repeat_password").innerHTML = "<p style='color:red'>required</p>";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("repeat_password").innerHTML = "<p style='color:red'>not same</p>";
output = false;
} 	
return output;
}

