class Banner extends HTMLElement{
    constructor (){
        super();
    }
    connectedCallback(){
        this.innerHTML =`
        <header>
            <h1>Star Wars Fan Blog</h1>
        </header>
        `
    }
}
/* class="banner" */
customElements.define("banner-component",Banner)