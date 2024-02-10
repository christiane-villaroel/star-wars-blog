/* if(typeof(Storage)!=="undefined"){
    localStorage.setItem()
} */
const user = {
    name:"starkiller1313",
    password:"starwars1313",
    loggedIn:false,
}
function validate (){
    if(document.loginForm.username.value==""){
        alert("Please enter a valid Username");
        document.loginForm.username.focus();
        return false;
    }
    if(document.loginForm.password.value==""||document.loginForm.password.value){
        alert("Please enter a valid Password");
        document.loginForm.password.focus();
        return false;
    }
    return(true);
}


function createAccount(){
   let userName = document.getElementById("new-user");
   let email = document.getElementById("email");
   let password = document.getElementById("password");
   let repeatPassword = document.getElementById("repeat");
   if(password.value == "" || password.value.length<8){
     alert("Password must be 8 or more characters long. Please try again.");
     password.focus();
   } 
   if(userName.value==""){
    alert("Please Enter a username to create an account")
    userName.focus();
   }
   if(email.value==""){
    alert("Please enter a valid email address to create an account");
    email.focus();
   }
   
   if(password.value == repeatPassword.value){
        document.querySelector(".password-match").style.display="block"
    }
   localStorage.setItem("name",document.getElementById("new-user").value)
   document.getElementById("profile").innerHTML=localStorage.getItem("name")
}

