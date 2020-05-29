var a = document.getElementById("canvas1");
var atx = a.getContext("2d");
atx.moveTo(0, 0);
atx.lineTo(100, 50);
atx.stroke();

var b = document.getElementById("canvas1");
var btx = b.getContext("2d");
btx.moveTo(0, 100);
btx.lineTo(100, 50);
btx.stroke();

var c = document.getElementById("canvas2");
var ctx = c.getContext("2d");
ctx.moveTo(0, 0);
ctx.lineTo(150, 100);
ctx.stroke();

var d = document.getElementById("canvas2");
var dtx = d.getContext("2d");
dtx.moveTo(150, 0);
dtx.lineTo(0, 100);
dtx.stroke();

var e = document.getElementById("canvas2");
var etx = e.getContext("2d");
etx.moveTo(75, 0);
etx.lineTo(75, 100);
etx.stroke();


