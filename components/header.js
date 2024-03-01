class Header extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML = `
        <nav>
            <ul class="nav-menu">
                <li id="nav-login" class="link-containers jura">
                    <a href="login.html"> <img id="login-icon" src="img/person-fill-svgrepo-com.svg"> Login </a>
                </li>
                <li class="link-containers jura">
                    <a href="#"> Sign-Up</a>
                </li>
                <li class="link-containers jura">
                    <a href="home.html">Home</a>
                </li>
                <li class="link-containers jura">
                    <a href="#">Posts</a>
                </li>
            </ul>
        </nav>
        `
    }
}
customElements.define("header-component",Header)