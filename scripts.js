
function validate (){
/*     let username = document.getElementById("username").value;
    let password = document.getElementById("password").value; */
    if(document.loginForm.username.value==""){
        alert("Please enter a valid Username");
        document.loginForm.username.focus();
        return false;
    }
    if(document.loginForm.password.value==""){
        alert("Please enter a valid Password");
        document.loginForm.password.focus();
        return false;
    }
    
    return(true);
}   