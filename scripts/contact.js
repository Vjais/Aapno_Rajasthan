// JavaScript Documen
function formValidation()  
{  
	   
	var uname = document.registration.name;  
	var dept = document.registration.dname;  
	var phone = document.registration.pnumber;  
	var email = document.registration.emailid;  
	var eventy = document.registration.etype;  
	var attendees = document.registration.eattendees;  
	var desire = document.registration.dvenue; 
	  
			if(allLetter(uname))  
			{  
				if(alldept(dept))  
				{   
					if(allphone(phone))  
					{  
						if(allemail(email))  
						{  
							if(allevent(eventy))  
							{  
								if(allattendees(attendees))  
								{ 
									if(alldesire(desire))
									{
									}
								}  
							}   
						}  
					}   
				}  
			  
		  
	}  
return false;  
}  

function allLetter(uname)  
{   
var letters = /^[A-Za-z]+$/;  
if(uname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Username must have alphabet characters only');  
uname.focus();
  
return false;  
}  
}  


function alldept(dept)  
{   
var letters = /^[A-Za-z]+$/;  
if(dept.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Department must have alphabet characters only');  
dept.focus();  
return false;  
}  
}  

function allphone(phone)
{
	var phoneno = /^\d{10}$/;  
  if(phone.value.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("message");
		phone.focus();   
        return false;  
        }  
	
}

function allemail(email)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(email.value.match(mailformat))  
	{  
		return true;  
	}  
	else  
	{  
		alert("You have entered an invalid email address!");  
		email.focus();  
		return false;
	}
}

