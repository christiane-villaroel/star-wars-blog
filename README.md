# star-wars-blog
This repo is part of my MAC 172: Web Development Course from LaGuardia Community College

**Project Goal:** To Practice and apply what I have learned in my course by building a Star Wars Blog Website
#### Languages Used:
<ul>
    <li>HTML</li>
    <li>CSS</li>
    <li>JavaScript</li>
</ul>

### Sources:
[HTML Layout Elements and Techniques](https://www.w3schools.com/html/html_layout.asp)

[Color Generator](https://coolors.co/f8f9fa-e9ecef-dee2e6-ced4da-adb5bd-6c757d-495057-343a40-212529)

[Lorem Ipsum Generator](https://www.lipsum.com/feed/html)

[icon svg](https://www.svgrepo.com/)

#### Sources for Styling Inspiration:
[star wars news net](https://www.starwarsnewsnet.com/2024/01/daisy-ridley-excited-to-work-with-sharmeen-obaid-chinoy-based-on-her-documentaries-and-her-star-wars-pitch.html)
[theforce.net](https://www.theforce.net/contact.asp)
[]()
<hr>

## 1/29/24-Summary:
- Created repo for blog project
- Made HTML,CSS and JS files for homepage
- Styling: selecting font styling to us through out website, used color generator to pick color themes for site.
- Source List created to keep track of online resources used throughout duration of project

## 2/2/24 -Summary:
- [SW Codpen Inspiration](https://codepen.io/RobinKWilliams/pen/yJLMqV)
 - > The link above is the inspiration for the font styling for my project
 - > Here is where I got the SW font stylings listed below:
    - <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Jura" />
    - <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Days+One" />
    - <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans" />  
#### Google Fonts Instructions
source : [Jura Font](https://fonts.google.com/selection/embed) 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap" rel="stylesheet">

// <uniquifier>: Use a uniquifier for the class name
// <weight>: Use a value from 300 to 700

.jura-<uniquifier> {
  font-family: "Jura", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}

##### CSS Grid:
- added CSS Grid to html file, making it easier for me to control the layout of each page
##### Login Page:
- Started login page
- need to complete validation in JS

## 2/4/24 -Summary:

##### Login Page:
- JS Validate function create for Password and username

##### Post's Page:
- create html Post page:
  - Gathered free stock photos to use for blog posts list from [Pexels.com](https://www.pexels.com/search/star%20wars/)
  - Dummy text used for post text: [Star Wars Ipsum](https://nerfherderipsum.com/)

## 2/12/24 -Summary:
- **Script.js**: Added comments() and createAccount() functions:
  - ***createAccount*** validates user input after clicking create account button. then redirects user to login page if all conditions are met
  - ***comments*** adds user's comments typed in textArea tag and creates new <p> tag with user text content only if textarea value is not empty string
## 2/13/2024 -Summary:
- <Main></Main> height adjusted to 100% as well as <div class="main-content-container"></div> and margin top and bottom set to 0px 
- *comment()*-> JS comment function created and edited to add new comments created by user in <textarea></textarea> input after clicking new comment. 
### SideNotes: 
- More changes needed to make webpages more responsive and need to fix design of <aside> side bar design.

## 2/29/2024:
Instead of hard coding each html section (Header, Footer, Article etc... ), I will be using Custom Elements to separate each section into components.

After researching best way to embed html files into other html file this seems the most promising. 
Also this reminds of Reactjs components, which makes a lot of sense since React is a JS library.

**Articles used to learn more about custom elements:**
- [freeCodeCamp](https://www.freecodecamp.org/news/reusable-html-components-how-to-reuse-a-header-and-footer-on-a-website/)
- [MDN Mozilla](https://developer.mozilla.org/en-US/docs/Web/API/Web_components/Using_custom_elements)

### Custom Element Header.js:
class Header extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML = `
        <header>
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

1) Defining Custom Element
- ``class Header extends HTMLElement{
    constructor(){
        super();
    }``
    - First create a class with the name Header that extends the HTML element.
    - *Class* - classes are a template for creating objects. In between the {} we define the class members.
    - *Constructor()* a method for creating and initializing an object created with a class.
      - It is a method in a Class that is automatically called when a new instance of the class is created. It is used for initializing the object instance of that class.
