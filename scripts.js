const user = {
    name:"starkiller1313",
    password:"starwars1313",
    loggedIn:false,
}
function validate (){
    let username = document.getElementById("username");
    let password = document.getElementById("password");
    if(username.value==""){
        alert("Please enter a valid Username");
        username.focus();
   
    }
    if(password.value==""){
        alert("Please enter a valid Password");
        password.focus();
     
    }else if(password.value.length<8){
        alert("Password must be 8 or more characters long. Please try again.")
        password.focus();
    }


}


function createAccount(){
   let validAccount = false;
   let userName = document.getElementById("new-user");
   let email = document.getElementById("email");
   let password = document.getElementById("password");
   let repeatPassword = document.getElementById("repeat");
   
   if(userName.value==""){
    alert("Please Enter a username to create an account");
    userName.focus();
   }else if(email.value==""){
    alert("Please enter a valid email address to create an account");
    email.focus();
   }
   else if(password.value == "" || password.value.length<8){
     alert("Password must be 8 or more characters long. Please try again.");
     password.focus();
   } else if(password.value == repeatPassword.value){
        document.querySelector(".password-match").style.display="block";
        validAccount = true;   
    }
   if(validAccount){
    localStorage.setItem("name",document.getElementById("new-user").value);
    window.location.replace("login.html")
    }
}

function comments(){
    let newComment = document.getElementById('textArea');
    if(newComment.value !== ""){
        document.getElementById("comment-section").innerHTML+=`<p>${newComment.value}</p>`;
        newComment.value="";
    }else{
        
        newComment.placeholder="Please enter your comments here before clicking post comment"
        newComment.focus();
    }
}

const footerTemplate = document.getElementById('header-template');
        document.body.appendChild(footerTemplate.content);