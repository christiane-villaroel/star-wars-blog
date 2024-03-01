class Footer extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML = `
        <footer>
            <small class="copyright jura">
                &copy; Copyright Christiane Villaroel
            </small>
        </footer>
        `;
    }
}

customElements.define("footer-component",Footer);