class Header extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML = `
        <nav>
            <ul class="nav-menu">
                <li id="nav-login" class="link-containers jura">
                    <a href="../login.php"> <img id="login-icon" src="img/person-fill-svgrepo-com.svg"> Login </a>
                </li>
                <li class="link-containers jura">
                    <a href="../sign-up.php"> Sign-Up</a>
                </li>
                <li class="link-containers jura">
                    <a href="../homepage.php">Home</a>
                </li>
                <li class="link-containers jura">
                    <a href="../posts.php">Posts</a>
                </li>
            </ul>
        </nav>
        `
    }
}
customElements.define("header-component",Header)