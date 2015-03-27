<html>
<head>
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>
   <style type="text/css">
   @font-face {
        font-family: archive;
          src: url("/fonts/archive/Archive.otf");
      }

      * {
  margin:auto;
  padding:0;
  -webkit-box-sizing:border-box;
  box-sizing:border-box;
}

body {
  background: white;
}

.superman {
  width: 200px;
  height: 150px;
  position: relative;
  margin: 50px auto;
}

.superman:hover {
   -webkit-animation: fly 0.4s infinite linear;
}

.head {
  position: absolute;
  z-index: 4;
  width: 120px;
  height: 110px;
  left: calc(50% - 60px);
}

.face {
  position: absolute;
  width: 100%;
  height: 100%;
  border: solid 8px #000;
  background: #FCDFD4;
  border-radius: 30px;
  overflow: hidden;
}

.mantle {
  z-index: 1;
  position: absolute;
  top: 6px;
  left: -50px;
  width: 350px;
  height: 100px;
  overflow: hidden;
}

.mantle-right {
  content: "";
  position: absolute;
  top: 50px;
  right: 69px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 80px 151px 0 0;
  border-color: #BE1622 transparent transparent transparent;
}

.mantle-right-fix {
  content: "";
  position: absolute;
  z-index: -1;
  top: 46.5px;
  right: 57px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 85px 155px 0 0;
  border-color: #000 transparent transparent transparent;
}

.mantle-left {
  content: "";
  position: absolute;
  top: 50px;
  left: 19px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 150px 80px 0;
  border-color: transparent #BE1622 transparent transparent;
}

.mantle-left-fix {
  content: "";
  position: absolute;
  z-index: -1;
  top: 46px;
  left: 15px;
  width: 0;
  height: 0;
  border-style: solid;
  left: 6px;
  border-width: 0 190px 105px 0;
  border-color: transparent #000 transparent transparent;
}

.mantle-neck {
  content: "";
  z-index: 3;
  position: absolute;
  top: 65px;
  left: calc(50% - 26px);
  width: 50px;
  height: 50px;
  background: #BE1622;
  border-radius: 110px;
  border: solid 4px black;
}

.body {
  z-index: 2;
  position: absolute;
  background: #1D71B8;
  width: 110px;
  height: 100px;
  left: calc(50% - 55px);
  border-radius: 30px;
  border: solid 5px black;
  top: 20px;
}

.feet {
  z-index: 2;
  position: absolute;
  width: 30px;
  height: 5px;
  top: 115px;
  left: calc(50% - 15px);
}

.feet:before {
  content: "";
  position: absolute;
  background: #BE1622;
  height: 5px;
  width: 10px;
  top: 0;
  left: 0;
  border-radius: 0 0 0 10px;
  border: solid 4px black;
}

.feet:after {
  content: "";
  position: absolute;
  background: #BE1622;
  height: 5px;
  width: 10px;
  top: 0;
  right: 0;
  border-radius: 0 0 10px 0;
  border: solid 4px black;
}

.hand-right {
  position: absolute;
  background: #FCDFD4;
  left: 42px;
  top: 96px;
  z-index: 4;
  width: 10px;
  height: 20px;
  border-radius: 10px;
  border: solid 3px black;
}

.hand-right:before,
.hand-right:after {
  content: "";
  position: absolute;
  background: #FCDFD4;
  top: -3px;
  z-index: 3;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  border: solid 3px black;
}

.hand-right:before {
  left: -10px;
}

.hand-right:after {
  left: -18px;
}

.hand-left {
  position: absolute;
  background: #FCDFD4;
  right: 24px;
  top: 96px;
  z-index: 4;
  width: 10px;
  height: 20px;
  border-radius: 10px;
  border: solid 3px black;
}

.hand-left:before,
.hand-left:after {
  content: "";
  position: absolute;
  background: #FCDFD4;
  top: -3px;
  z-index: 3;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  border: solid 3px black;
}

.hand-left:before {
  left: -10px;
}

.hand-left:after {
  left: -18px;
}

.hair {
  position: absolute;
  top: 0;
  background: black;
  width: 100%;
  height: 30px;
}

.hair:before {
  content: "";
  position: absolute;
  background: black;
  height: 100%;
  width: 10px;
  left: 0;
  top: 30px;
}

.hair:after {
  content: "";
  position: absolute;
  background: black;
  height: 100%;
  width: 10px;
  right: 0;
  top: 30px;
}

.meche {
  position: absolute;
  bottom: -10px;
  right: 30px;
  height: 20px;
  width: 20px;
  background: black;
  border-radius: 20px;
}

.meche:before {
  content: "";
  position: absolute;
  top: 3px;
  right: -3px;
  height: 25px;
  width: 10px;
  background: black;
  border-radius: 20px;
  transform: rotate(25deg);
  -webkit-transform: rotate(25deg);
}

.eye-left {
  position: absolute;
  left: 30px;
  top: 53px;
  background: #53BCE6;
  border-radius: 10px;
  height: 10px;
  width: 10px;
  border: solid 4px black;
}

.eye-left:before {
  content: "";
  position: absolute;
  width: 20px;
  height: 5px;
  background: #000;
  left: -8px;
  top: -4.5px;
  transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
}

.eye-right {
  position: absolute;
  right: 30px;
  top: 53px;
  background: #53BCE6;
  border-radius: 10px;
  height: 10px;
  width: 10px;
  border: solid 4px black;
}

.eye-right:before {
  content: "";
  position: absolute;
  width: 20px;
  height: 5px;
  background: #000;
  left: -8px;
  top: -4.5px;
  transform: rotate(-15deg);
  -webkit-transform: rotate(-15deg);
}

.mouth {
  position: absolute;
  bottom: 15px;
  left: calc(50% - 10px);
  width: 20px;
  height: 4px;
  background: #000;
}

.mouth:before {
  content: "";
  position: absolute;
  width: 7px;
  height: 4px;
  right: -6px;
  top: 1.5px;
  background: #000;
  transform: rotate(25deg);
  -webkit-transform: rotate(25deg);
}

.mouth:after {
  content: "";
  position: absolute;
  width: 7px;
  height: 4px;
  left: -6px;
  top: 1.5px;
  background: #000;
  transform: rotate(-25deg);
  -webkit-transform: rotate(-25deg);
}

@-webkit-keyframes fly {
  0% {
    -webkit-transform: translateY(0);
  }
  50% {
    -webkit-transform: translateY(20px);
  }
}

@keyframes fly {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(20px);
  }
}

   </style>
</head>
<body>
	<div class="superman" style="margin-top:200px;">
  <div class="head">
    <!-- Face -->
    <div class="face">
      <!-- Hair -->
      <div class="hair">
        <div class="meche"></div>
      </div>
      
      <!-- Eyes -->
      <div class="eye-right"></div>
      <div class="eye-left"></div>
      
      <!-- Mouth -->
      <div class="mouth"></div>
    </div>
  </div>
  
  <!-- Mantle -->
  <div class="mantle">
    <div class="mantle-right"></div>
    <div class="mantle-right-fix"></div>
    
    <div class="mantle-left"></div>
    <div class="mantle-left-fix"></div>
  </div>
  <div class="mantle-neck"></div>
  
  <!-- Body -->
  <div class="body"></div>
  
  <!-- Hands -->
  <div class="hand-right"></div>
  <div class="hand-left"></div>
  
  <!-- Feet -->
  <div class="feet"></div>
</div>
<div>
	<h1 align="center" style="font-family:archive; color:DarkSlateGray;" >
		This page is currently under development.
	</h1>
</div>
</body>
  
</html>