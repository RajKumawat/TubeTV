function checkPassword(form) { 
    password1 = form.password.value; 
    password2 = form.hpassword.value; 

    // If password not entered 
    if (password1 == '') 
    document.getElementById('errorresult').innerHTML = "Password didnt match. Please try again.";
          
    // If confirm password not entered 
    else if (password2 == '') 
    document.getElementById('errorresult').innerHTML = "Password didnt match. Please try again.";
          
    // If Not same return False.     
    else if (password1 != password2) { 
        // alert ("\nPassword did not match: Please try again...") ;
        document.getElementById('errorresult').innerHTML = "Password didnt match. Please try again.";
        return false; 
    } 

    // If same return True. 
    else
    {    
        return true; 
    } 
} 