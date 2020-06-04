<!Doctype html>
<html>
	<head>
		<title>Divers</title>
		<link rel="stylesheet" href="style.css">
		<style media="print" type="text/css"> 
			.noImpr {
				display:none;
			} 
		</style>
		<meta http-equiv="Content-Type" content="text/plain;text/javascript;text/css;charset=utf-8" />
       
	</head>
	
	<body>
		<form>
			<table width="100%" border="0">
				<tr >
					<td>
						<div class="rectangle" >
							<label><i>Client<br /></i>
							<?php echo $_GET['client'] ?>
						</div>
					</td>
					<td>
						<div style="margin:10px; width:250px; border: 1px #000000 solid; height:50px; text-align:center; float: left">
							<label><i>Ral<br /></i></label>
								<?php echo $_GET['ral'] ?>
						</div>
					</td>
					<td >
						<div class="rectangle" >
							<p><label for="fld_986953_1"><B>Date : </b></label><br /></p>
							<?php echo $_GET['date'] ?>
						</div>
					</td>
					<td>
						<div class="rectangle">
							<label><i>Tech<br /></i><?php echo $_GET['technicien'] ?></label>
							
						</div>
					</td>
				</tr>
				<tr>
					<td colspan=4 align="center">
						<h1>Divers</h1>
					</td>
				</tr>
				<tr >
					<td>
						<div class="rectangle2" >
							<label><i><b>Rep<br /></b></i><input type="text" name="rep"></label>
						</div>
					</td>
					<td>
						<div class="rectangle2" >
							<label><i><b>Qté<br /></b></i><input type="text" name="qte"></label>
						</div>
					</td>
					<td>
						<div class="rectangle2" >
							<label><i><b>Lg<br /></b></i><input type="text" name="lg"></label>
						</div>
					</td>
					<td>
						<div class="rectangle2" >
							<label><i><b>Ht<br /></b></i><input type="text" name="ht"></label>
						</div>
					</td>
				</tr>
			</table>

							<div class="cadre" id="canvasDiv" style="border: 2px solid black;width:800px;height:800px;margin: 0 auto"></div>  


				
<footer>
		<table border="0" width="100%" style="border-collapse: collapse; margin-top: 100px;">
			<tr align="center">
				<td style="border-top: 2px #000000 solid;"></td>
				<td style="border-top: 2px #000000 solid;padding-top:10px;">
					<p><label>Hauteur Point de Niveau / Linteau : </label><input type="number" >
				</td>
				<td style="border-top: 2px #000000 solid;"></td>
				<td style="border-top: 2px #000000 solid; "></td>
				<td style="border-top: 2px #000000 solid;padding-top:10px;">						
					<p><label>Hauteur Point de Niveau / Sol Fini : </label><input type="number" >
				</td>
				<td style="border-top: 2px #000000 solid;"></td>
			</tr>
			<tr>
				<td align="right">
					<span>&#8593;<br /><input type="number" style="width:50px;  margin-bottom:10px; margin-top: 10px"> Cm <br />&#8595;</span>
				</td>
				<td>
					<div class="rectangle3" >
						<p style="font-size:24px"><b>Cote Béton</b></p>
					</div><br /><br /><br /><br />
					<p style="margin-left:80px">&#8592; <input type="number" style="width:50px; margin-bottom:5px; margin-left:15px; margin-right:15px"> Cm &#8594;</p>
				</td>	
				<td colspan=3>
					<label><b>Observation: <textarea name="observations" rows=4 cols=40></textarea></b></label>
				</td>
			</tr>
		</table>
	</footer>
	<div class="noImpr">
		<p align="center"><input type="button" value="Enregistrer" onClick="window.print()"></p>	
		<p align="center"><button><a href="file:///C:/Prise%20de%20cote/Home.html">Nouvelle Prise de Cote</a></button></p>
	</div>

	</form>
	

	
<script language="javascript" type="text/javascript">
var c1=document.getElementById("canvas1");
var pinceau=c1.getContext("2d");

var ecart = 50; //largeur d'un côté des cases
//lignes
for(var h = ecart ; h < c1.height ; h += ecart) {
   pinceau.moveTo(0, h); //déplacer le pinceau à (x,y) sans tracer
   pinceau.lineTo(c1.width, h); //tracer jusqu'à (x,y)
}
//colonnes
for(var w = ecart ; w < c1.width ; w += ecart) {
   pinceau.moveTo(w, 0);
   pinceau.lineTo(w, c1.height);
}
pinceau.stroke();
</script>
<script type="text/javascript">
	document.querySelector("#couleurspe").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#textecouleurspe')).display=='block'){
			document.querySelector("#textecouleurspe").style.display="none";
		} else {
			document.querySelector("#textecouleurspe").style.display="block";
		}
	}
</script>
	
</html>
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        let draw =  {
        init:function(){
            self=this;
            this.clickX = new Array();
            this.clickY = new Array();
            this.clickDrag = new Array();
            this.paint;
            this.canvasDiv = document.getElementById('canvasDiv');
            this.canvas = document.createElement('canvas');
            this.canvas.setAttribute('width', "800");
            this.canvas.setAttribute('height', "800");
            this.canvas.setAttribute('id', 'canvas');
            this.canvasDiv.appendChild(this.canvas);
            if(typeof G_vmlCanvasManager !== 'undefined') {
                this.canvas = G_vmlCanvasManager.initElement(this.canvas);
            }
            this.context = canvas.getContext("2d");
 
            $('#canvas').mousedown(function(e){
                var mouseX = e.pageX - this.offsetLeft;
                var mouseY = e.pageY - this.offsetTop;
                  
                this.paint = true;
                draw.addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop);
                draw.redraw();
            });
          
            $('#canvas').mousemove(function(e){
                if(this.paint){
                draw.addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
                draw.redraw();
                }
            });     
          
            $('#canvas').mouseup(function(e){
                this.paint = false;
            });
          
            $('#canvas').mouseleave(function(e){
                this.paint = false;
            });
        },
        addClick:function(x, y, dragging){
            this.clickX.push(x);
            this.clickY.push(y);
            this.clickDrag.push(dragging);
        },
        redraw:function(){
                this.context.clearRect(0, 0, this.context.canvas.width, this.context.canvas.height); // Clears the canvas
          
                this.context.strokeStyle = "#333";
                this.context.lineJoin = "round";
                this.context.lineWidth = 8;
          
                for(var i=0; i < this.clickX.length; i++) {      
                    this.context.beginPath();
                    if(this.clickDrag[i] && i){
                            this.context.moveTo(this.clickX[i-1], this.clickY[i-1]);
                    }else{
                            this.context.moveTo(this.clickX[i]-1, this.clickY[i]);
                    }
                    this.context.lineTo(this.clickX[i], this.clickY[i]);
                    this.context.closePath();
                    this.context.stroke();
                }
        },
                clear:function(){
            this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
            this.clickX = new Array();
            this.clickY = new Array();
            this.clickDrag = new Array();
        }
        }
 
        document.addEventListener("DOMContentLoaded", () => {
        draw.init();
    });
        </script>
					<script>
				var h = document.getElementById("cadre");
				var htx = h.getContext("2d");
				htx.moveTo(500, 0);
				htx.lineTo(500, 500);
				htx.stroke();