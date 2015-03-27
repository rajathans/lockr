<html>
<head>
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>
   <style type="text/css">
   @font-face {
        font-family: archive;
          src: url("/fonts/archive/Archive.otf");
}

  * {
  box-sizing: border-box;
}

.head {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 94px;
  height: 152px;
  transform: translateX(-50%) translateY(-50%);
}

.hat .top {
  position: absolute;
  top: 0;
  left: 4px;
  width: 86px;
  height: 46px;
  border-top-left-radius: 200px;
  border-top-right-radius: 200px;
  background: #eb3a28;
  z-index: 8;
}
.hat .shadow, .hat .front {
  position: absolute;
  bottom: 78px;
  left: 0;
  width: 94px;
  height: 27px;
  border-radius: 7px;
  background-color: #df3220;
  z-index: 8;
}
.hat .shadow {
  bottom: 80px;
  background-color: #c52818;
}

.beard {
  position: absolute;
  bottom: 0;
  left: 4px;
  width: 86px;
  height: 82px;
  border-bottom-left-radius: 200px;
  border-bottom-right-radius: 200px;
  background: #4d2f1c;
  z-index: 6;
}

.ears {
  position: absolute;
  bottom: 71px;
  left: 0;
  width: 100%;
  height: 10px;
  z-index: 5;
}
.ears:before, .ears:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #f9a324;
}
.ears:after {
  left: auto;
  right: 0;
}

.face {
  position: absolute;
  bottom: 56px;
  left: 10px;
  width: 73px;
  height: 22px;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  background-color: #f9a324;
  z-index: 7;
}
.face:after {
  content: '';
  position: absolute;
  bottom: -7px;
  left: 50%;
  width: 14px;
  height: 14px;
  margin-left: -7px;
  border-radius: 50%;
  background-color: #f9a324;
}
.face .eyes {
  position: absolute;
  top: 7px;
  left: 14px;
  width: 44px;
  height: 8px;
}
.face .eyes:before, .face .eyes:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 12px;
  height: 8px;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  border: solid 2px #4d2f1c;
  border-top: 0;
}
.face .eyes:after {
  left: auto;
  right: 0;
}
.face .mouth {
  position: absolute;
  bottom: -30px;
  left: 15px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #f9a324;
}
.face .mouth:before {
  content: '';
  position: absolute;
  top: 6px;
  left: 6px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #4d2f1c;
}


   </style>
</head>
<body>
	<div class="head" id="theMan" onmouseover="changeIt()" style="font-family:archive; font-size:30px; color:crimson;">
  <div class="hat">
    <div class="top"></div>
    <div class="shadow"></div>
    <div class="front"></div>
  </div>
  
  <div class="beard"></div>
  <div class="ears"></div>
  <div class="face">
    <div class="eyes"></div>  
    <div class="mouth"></div>
  </div>

  
</div>

</body>
  
</html>