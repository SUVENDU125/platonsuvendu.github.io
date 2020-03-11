function myfun() {
	 var email=document.getElementById('email1').value;
	 var pass=document.getElementById('pass1').value;
	 var cpass=document.getElementById('cpass1').value;

	 var checkem= /^[A-Za-z0-9]{3,15}@[A-Za-z0-9]{3,15}[.]{1}[A-Za-z0-9.]{2,6}$/;
	 var checkps= /^(?=.*[789])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{6}$/;
	 if(checkem.test(email)){
	 	document.getElementById('email1').style.border='2px solid green';
	 }
	 else{
	 	document.getElementById('email1').style.border='2px solid red';
	 	return false;
	 }
	  if(checkps.test(pass)){
	 	document.getElementById('pass1').style.border='2px solid green';
	 }
	 else{
	 	document.getElementById('pass1').style.border='2px solid red';
	 	return false;
	 }
	  if(cpass.match(pass)){
	 	document.getElementById('cpass1').style.border='2px solid green';
	 }
	 else{
	 	document.getElementById('cpass1').style.border='2px solid red';
	 	return false;
	 }
}