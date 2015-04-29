<html>
  <head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
      @font-face {
        font-family: archive;
          src: url("fonts/archive/Archive.otf");
      }
      body {
  background: DarkSlateGray;
  color: white;
  text-align: center;
}
a {
  color: inherit;
  font-family: archive;
  font-size: 14px;
}
h1, h2, h3, h4 {
  margin: 0;
  margin-bottom: 10px;
  margin-top: 10px;
}
h1 {
  font-size: 80px;
  font-family: archive;
  color:IndianRed;
}
h4 {
  font-size: 18px;
  font-family: archive;
  color:DarkSlateGray;
  margin-top: -20px;
}
.menu {
  filter: url("#shadowed-goo");
}
.menu-item, .menu-open-button {
  background: IndianRed;
  border-radius: 100%;
  width: 80px;
  height: 80px;
  margin-left: -40px;
  position: absolute;
  top: 20px;
  color: white;
  text-align: center;
  line-height: 80px;
  transform: translate3d(0, 0, 0);
  transition: transform ease-out 200ms;
}
.menu-open {
  display: none;
}
.hamburger {
  width: 25px;
  height: 3px;
  background: white;
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -12.5px;
  margin-top: -1.5px;
  transition: transform 200ms;
}
.hamburger-1 {
  transform: translate3d(0, -8px, 0);
}
.hamburger-2 {
  transform: translate3d(0, 0, 0);
}
.hamburger-3 {
  transform: translate3d(0, 8px, 0);
}
.menu-open:checked + .menu-open-button .hamburger-1 {
  transform: translate3d(0, 0, 0) rotate(45deg);
}
.menu-open:checked + .menu-open-button .hamburger-2 {
  transform: translate3d(0, 0, 0) scale(0.1, 1);
}
.menu-open:checked + .menu-open-button .hamburger-3 {
  transform: translate3d(0, 0, 0) rotate(-45deg);
}
.menu {
  position: absolute;
  left: 50%;
  margin-left: -80px;
  padding-top: 20px;
  padding-left: 80px;
  width: 650px;
  height: 150px;
  box-sizing: border-box;
  font-size: 20px;
  text-align: left;
}
.menu-item:hover {
  background: crimson;
  color: white;
}
.menu-item:nth-child(3) {
  transition-duration: 180ms;
}
.menu-item:nth-child(4) {
  transition-duration: 180ms;
}
.menu-item:nth-child(5) {
  transition-duration: 180ms;
}
.menu-item:nth-child(6) {
  transition-duration: 180ms;
}
.menu-open-button {
  z-index: 2;
  transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition-duration: 400ms;
  transform: scale(1.1, 1.1) translate3d(0, 0, 0);
  cursor: pointer;
}
.menu-open-button:hover {
  transform: scale(1.2, 1.2) translate3d(0, 0, 0);
}
.menu-open:checked + .menu-open-button {
  transition-timing-function: linear;
  transition-duration: 200ms;
  transform: scale(0.8, 0.8) translate3d(0, 0, 0);
}
.menu-open:checked ~ .menu-item {
  transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
}
.menu-open:checked ~ .menu-item:nth-child(3) {
  transition-duration: 190ms;
  transform: translate3d(110px, 0, 0);
}
.menu-open:checked ~ .menu-item:nth-child(4) {
  transition-duration: 290ms;
  transform: translate3d(220px, 0, 0);
}
.menu-open:checked ~ .menu-item:nth-child(5) {
  transition-duration: 390ms;
  transform: translate3d(330px, 0, 0);
}
.menu-open:checked ~ .menu-item:nth-child(6) {
  transition-duration: 490ms;
  transform: translate3d(440px, 0, 0);
}
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <title>Lockr</title>
  </head>
  <body>
  <div style="position: relative;  top: 50%; transform: translateY(-50%);" align="center" class="container">
    <h1>LOCK<span style="color:white;">R</span></h1>

<nav class="menu">
  <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
  <label class="menu-open-button" for="menu-open">
    <span class="hamburger hamburger-1"></span>
    <span class="hamburger hamburger-2"></span>
    <span class="hamburger hamburger-3"></span>
  </label>
  
  <a href="/auth/login" style="text-decoration:none;" class="menu-item">Enter</a>
  <a href="/about" style="text-decoration:none;" class="menu-item">About</a>  
</nav>


<!-- filters -->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <filter id="shadowed-goo">
          
          <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
          <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
          <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
          <feOffset in="shadow" dx="1" dy="1" result="shadow" />
          <feComposite in2="shadow" in="goo" result="goo" />
          <feComposite in2="goo" in="SourceGraphic" result="mix" />
      </filter>
      <filter id="goo">
          <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
          <feComposite in2="goo" in="SourceGraphic" result="mix" />
      </filter>
    </defs>
</svg>
</div>
  </body>
</html>