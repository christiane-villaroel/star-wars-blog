function validate (){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    if(username==""){
        alert()
    }
    document.getElementById("logged-in").innerHTML =`<h2>Logged In</h2> <br/> ${username}`
}