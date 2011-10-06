<!DOCTYPE HTML>
<html>
    <head>
        <style>
            body {
                margin: 0px;
                padding: 0px;
            }
            
            #myCanvas {
                border: 1px solid #9C9898;
            }
        </style>
        <script src="http://www.html5canvastutorials.com/libraries/kinetic2d-v1.0.2.js">
        </script>
        <script>
            var kin;
            var myRectangle;
            var nextX;
            var dX = 1;
            var nextY;
            var dY = 1;
            var mX;
            var mY;
            var lX;
            var lY;
            var manHeight = 50; 
var i = 0;           
var j = 1;

            function Rectangle(x, y, width, height, borderWidth){
                this.x = x;
                this.y = y;
                this.width = width;
                this.height = height;
                this.borderWidth = borderWidth;
            }
            
            function updateStage(){
                var linearSpeed = 100; // pixels / second
                var linearDistEachFrame = linearSpeed *
                kin.getTimeInterval() /
                1000;
                
                var currentX = myRectangle.x;
                var currentY = myRectangle.y;
                
                

                if (currentX <
                kin.getCanvas().width - myRectangle.width -
                myRectangle.borderWidth / 2 && currentX >= 0) {
                    var newX = currentX + (dX * linearDistEachFrame);
                    
                    myRectangle.x = newX;
                }
                else
                //if (currentX ==
                //kin.getCanvas().width - myRectangle.width -
                //myRectangle.borderWidth / 2) 
                {
                   dX = dX * -1; 
                   var newX = currentX + (dX * linearDistEachFrame);
                    
                    myRectangle.x = newX; 
                }
                if (currentY <
                kin.getCanvas().height - myRectangle.height -
                myRectangle.borderWidth / 2 && currentY - 10 >= 0) {
                    var newY = currentY + (dY * linearDistEachFrame);
                    
                    myRectangle.y = newY;
                }
                else
                //if (currentY >=
                //kin.getCanvas().height - myRectangle.height -
                //myRectangle.borderWidth / 2) 
                {
                   dY = dY * -1; 
                   var newY = currentY + (dY * linearDistEachFrame);
                    
                    myRectangle.y = newY; 
                }

mX = myRectangle.x + 15;
mY = myRectangle.y + 15;
lX = myRectangle.x / 2;
lY = myRectangle.y / 2;
nX = myRectangle.x + 17;
nY = myRectangle.y + 17;
kX = myRectangle.x / 4 + 50;
kY = myRectangle.y / 4 + 50;
a1X = myRectangle.x + (myRectangle.width/2) + 20 ;
a1Y = myRectangle.y + (myRectangle.height/2) + 7;
b1X = myRectangle.x + 60 + (i*1.5);
b1Y = myRectangle.y + 60 + i;
a2X = myRectangle.x + (myRectangle.width/2) + 20 ;
a2Y = myRectangle.y + (myRectangle.height/2) - 7;
b2X = myRectangle.x - 10 + (i*2);
b2Y = myRectangle.y  - 20 - i;
i = i + j;
if (i ==50 || i == -1 ) { j = j * -1 ; }
            }
            
            window.onload = function(){
                // instantiate new animation object
                kin = new Kinetic_2d("myCanvas");
                myRectangle = new Rectangle(0, 25, 100, 25, 5);
                
                // set drawStage method
                kin.setDrawStage(function(){
                    updateStage();
                    kin.clear();
                    var context = kin.getContext();
                    context.beginPath();

context.arc(myRectangle.x + myRectangle.width + 12, myRectangle.y + (myRectangle.height/2), 10, 0, 2 * Math.PI, false);
 
    context.fillStyle = "#8ED6FF";
    context.fill();
    context.lineWidth = 5;
    context.strokeStyle = "black";
    context.stroke();

                    context.rect(myRectangle.x, myRectangle.y, myRectangle.width, myRectangle.height);
                    
                    context.fillStyle = "#8E333F";
                    context.fill();
                    context.lineWidth = myRectangle.borderWidth;
                    context.strokeStyle = "black";
                    context.stroke();
    
                   

                    context.moveTo(mX,mY);
                    context.lineTo(lX,lY);
                    context.stroke();   
    

                    context.moveTo(nX,nY);
                    context.lineTo(kX,kY);
                    context.stroke();   
    

                    context.moveTo(a1X,a1Y);
                    context.lineTo(b1X,b1Y);
                    context.stroke();     
    

                    context.moveTo(a2X,a2Y);
                    context.lineTo(b2X,b2Y);
                    context.stroke();       
        });
                
                kin.startAnimation();
            };
        </script>
    </head>
    <body onmousedown="return false;">
        <canvas id="myCanvas" width="778" height="400" bgcolor="fffff">
        </canvas>
    </body>
</html>