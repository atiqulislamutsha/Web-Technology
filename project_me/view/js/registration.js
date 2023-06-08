
            function validation()  
            {  
                var id=document.f1.name.value;  
                var em=document.f1.email.value;
                var username=document.f1.username.value;    
                var adress=document.f1.address.value;  
                var city=document.f1.city.value;  
                var country=document.f1.country.value;  
                var password=document.f1.password.value;  
                var repassword=document.f1.repassword.value; 
                var gender=document.f1.gender.value;   
                var bloodgroup=document.f1.bloodgroup.value;
                var dob=document.f1.dob.value;    
                if(id.length=="" && em.length==""&& username.length==""&& adress.length==""&& city.length==""&& country.length==""&& password.length==""&& repassword.length=="" &&gender.length=="" && bloodgroup.length="" &&dob.length=="")
                {  
                    alert(" fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert(" Name is empty");  
                        return false;  
                    }   
                    if (em.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                    if (username.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                      
                      if (adress.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                      
                      if (city.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                      
                      if (country.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                      
                      if (password.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                      
                      if (repassword.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                      if (gender.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                     
                      if (bloodgroup.length="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                      if (dob.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                         


                }                             
            }  
    