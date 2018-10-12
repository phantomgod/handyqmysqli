<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
<!--

#main {
overflow: hidden;
border: 1px solid black;
color: black;
text-align: center;
position: absolute; top: 30px; left: 50px;
background-color: white;
width: 200px;
height: 200px}

#div0 {
position: absolute; top: 300px; left: 10px;
color: white;
background-color: black;
width: 200px;
height: 200px}

#div1 {
position: absolute; top: 300px; left: 300px;
background-color: #9fff30;
width: 200px;
height: 200px}

#div2 {
position: absolute; top: 50px; left: 300px;
background-color: red;
width: 200px;
height: 200px}

#div3 {
position: absolute; top: 300px; left: 600px;
background-color: blue;
width: 200px;
height: 200px}

#btnContainer {
position: absolute; top: 250px; left: 10px}

-->
</style>
<script type="text/javascript">
<!--

var curDiv = 0;
var divSlide;
var divId;
var curLeft = -200;
var zedIndex = 0;
var pauser;

function swapDiv(dir) {
    divId = "div"+curDiv;
    zedIndex = zedIndex + 100;
    curLeft = curLeft * dir;
    document.getElementById(divId).style.top = 0+"px";
    divSlide = setInterval(function() {slideDiv(dir)},30);
}

function slideDiv(dir) {
    document.getElementById(divId).style.zIndex = zedIndex; //this line has to be here and not in swapDiv() to eliminate flickering during 2nd loop through
    curLeft = curLeft + (1*dir);
    if (dir == 1 && curLeft > 0)   {  //we have scrolled all the way to the right
     clearInterval(divSlide);
     clearTimeout(pauser);
     curDiv = curDiv + 1;
     if (curDiv > 3) curDiv = 0;
     curLeft = -200 * dir;
     pauser = setTimeout(function() {swapDiv(dir)},1000);
    } else if (dir == -1 && curLeft < 0) { //we have scrolled all the way to the left
      clearInterval(divSlide);
      clearTimeout(pauser);
      curDiv = curDiv + 1;
      if (curDiv > 3) curDiv = 0;
      curLeft = 200 * dir;
      pauser = setTimeout(function() {swapDiv(dir)},1000);
    } else {  //keep scrolling to the right
        document.getElementById(divId).style.left = curLeft+"px";
    }
}

function stopSliding(btn) {
    if (btn == "stop") {
        document.getElementById("l2r").disabled = false;
        document.getElementById("r2l").disabled = false;
        curLeft = -200;
    } else {
        document.getElementById("l2r").disabled = true;
        document.getElementById("r2l").disabled = true;
    }
    clearInterval(divSlide);
    clearTimeout(pauser);
}

//-->
</script>
</head>
<body>

<div id="main">
    <div id="div0">This is Div 1</div>
    <div id="div1">This is Div 2</div>
    <div id="div2">This is Div 3</div>
    <div id="div3">This is Div 4</div>
</div>

<div id="btnContainer">
    <button id="l2r" onclick="stopSliding(this.id);swapDiv(1);">Slide Left 2 Right</button>
    <button onclick="stopSliding('stop');">Stop Sliding</button>
    <button id="r2l" onclick="stopSliding(this.id);swapDiv(-1);">Slide Right 2 left</button>
</div>

</body>
</html>