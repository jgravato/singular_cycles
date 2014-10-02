canvas.htmlOpen
Jonathan Gravato 
(jgravato82@gmail.com)
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <title>Singular Cycle Company</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom_canvas.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>
    <script src="js/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    
</head>

<body>

<div class="container-fluid"> <!-- Container -->
    
<!-- Navigation -->
        <?php include 'includes/header.php';?>
<!--End Navigation -->
    
</div> <!-- End Container -->

<body>
    

        <div class="header top-canvas-buffer">
                <h1>customize</h1>
        </div>
<div class="container">   
<div class="row">   
    <div class="col-md-8 col-sm-8">
        <div class="canvas_container">
            <canvas id="q" width="800" height="413" style="border:1px solid #000000;"></canvas>
        </div>
    </div>
         <script>
            // This originally sets the canvas up with image
                var canvas = $("#q")[0]; 
                var context = canvas.getContext("2d");
                var img = new Image();
                img.src = "http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/bike_2.png";
                img.onload = function() {
                context.drawImage(img, 75, 10, 650, 433);
                };
              </script>

 
<!-- begin FRAME Color Buttons -->    
  <div class="col-med-4">
    </br>FRAME</br>
      <a id="a"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/green.png" alt="green frame"></a> <!--GREEN-->
      <a id="b"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/blue.png" alt="blue frame"></a> <!--BLUE-->
      <a id="c"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/red.png" alt="red frame"></a> <!--RED-->
      <a id="d"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/baby_blue.png" alt="baby blue frame"></a> <!--BABY BLUE-->
      <a id="e"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/yellow.png" alt="yellow frame"></a> <!--YELLOW-->
      <a id="f"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/black.png" alt="black frame"></a> <!--BLACK-->

<!-- Begin FRONT Wheel Color Buttons -->
      </br>FRONT WHEEL</br>
      <a id="g"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/green.png" alt="green front wheel"></a> <!--GREEN-->
      <a id="h"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/blue.png" alt="blue front wheel"></a> <!--BLUE-->
      <a id="i"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/red.png" alt="red front wheel"></a> <!--RED-->
      <a id="j"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/baby_blue.png" alt="baby blue front wheel"></a> <!--BABY BLUE-->
      <a id="k"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/yellow.png" alt="yellow front wheel"></a> <!--YELLOW-->
      <a id="l"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/black.png" alt="black front wheel"></a> <!--BLACK-->

<!-- Begin BACK Wheel Color Buttons -->
      </br>BACK WHEEL</br>
      <a id="m"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/green.png" alt="green back wheel"></a> <!--GREEN-->
      <a id="n"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/blue.png" alt="blue back wheel"></a> <!--BLUE-->
      <a id="o"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/red.png" alt="red back wheel"></a> <!--RED-->
      <a id="p"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/baby_blue.png" alt="baby blue back wheel"></a> <!--BABY BLUE-->
      <a id="r"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/yellow.png" alt="yellow back wheel"></a> <!--YELLOW-->
      <a id="s"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/black.png" alt="black back wheel"></a> <!--BLACK-->

<!-- Begin SEAT Color Buttons -->
      </br>SEAT</br>
      <a id="t"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/green.png" alt="green seat"></a> <!--GREEN-->
      <a id="u"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/blue.png" alt="blue seat"></a> <!--BLUE-->
      <a id="v"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/red.png" alt="red seat"></a> <!--RED-->
      <a id="w"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/baby_blue.png" alt="baby blue seat"></a> <!--BABY BLUE-->
      <a id="x"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/yellow.png" alt="yellow seat"></a> <!--YELLOW-->
      <a id="y"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/black.png" alt="black seat"></a> <!--BLACK-->
       
<!-- Begin SEAT Color Buttons -->
      </br>Grips</br>
      <a id="z"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/green.png" alt="green grips"></a> <!--GREEN-->
      <a id="aa"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/blue.png" alt="blue grips"></a> <!--BLUE-->
      <a id="ab"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/red.png" alt="red grips"></a> <!--RED-->
      <a id="ac"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/baby_blue.png" alt="baby blue grips"></a> <!--BABY BLUE-->
      <a id="ad"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/yellow.png" alt="yellow grips"></a> <!--YELLOW-->
      <a id="ae"><img src="http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/swatches/black.png" alt="black grips"></a> <!--BLACK-->
       
        <div class="row top-buffer"
        </br>
        <button type="button" class="btn btn-danger btn-lg">BUY NOW</button>
        </div>
<!--End Buttons--> 
</div>
   
        <div><li class="divider"></li></div>
        <div><li class="divider"></li></div>
   
    <div class="row">
            <div class="col-md-12 col-sm-12">
                <image src="images/banner.png" class="img-responsive"></image>
            </div>
        </div>

    <footer>
        <h6><center>©2014 SINGULAR BICYCLES COMPANY | EDUCATIONAL PURPOSES ONLY</center></h6>
        </footer>
    </div>


</div>


<!-- begin FRAME img loader-->

    <!-- green frame -->
    <script>
           $('#a').click(function(){
           var canvas = $('#q')[0];
           //canvas.width = canvas.width;//blanks the canvas
           var c = canvas.getContext("2d");
            var img = new Image();
            img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/frames/green_frame.png';
            img.onload = function(){
            c.drawImage(img, 199, 98, 400, 207);
           }
           return false;
          });
    </script>
  
    <!--- blue frame -->
    <script>
       $('#b').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/frames/blue_frame.png';
        img.onload = function(){
        c.drawImage(img, 199, 98, 400, 207);
       }
       return false;
      });
    </script>      
  
    <!--- red frame -->
    <script>
       $('#c').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/frames/red_frame.png';
        img.onload = function(){
        c.drawImage(img, 199, 98, 400, 207);
       }
       return false;
      });
    </script>

    <!--- baby blue frame -->
    <script>
       $('#d').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/frames/baby_blue_frame.png';
        img.onload = function(){
        c.drawImage(img, 199, 98, 400, 207);
       }
       return false;
      });
    </script>

    <!--- yellow frame -->
    <script>
       $('#e').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/frames/yellow_frame.png';
        img.onload = function(){
        c.drawImage(img, 199, 98, 400, 207);
       }
       return false;
      });
    </script>
    
    <!--- black frame -->
    <script>
       $('#f').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/frames/black_frame.png';
        img.onload = function(){
        c.drawImage(img, 199, 98, 400, 207);
       }
       return false;
      });
    </script> 

<!-- end FRAME img loader--> 
    
<!-- begin FRONT WHEEL img loader-->

    <!-- green wheels -->
    <script>
           $('#g').click(function(){
           var canvas = $('#q')[0];
           //canvas.width = canvas.width;//blanks the canvas
           var c = canvas.getContext("2d");
            var img = new Image();
            img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/front_wheels/green_front.png';
            img.onload = function(){
            c.drawImage(img, 471.5, 155, 235, 234);
           }
           return false;
          });
    </script>
  
    <!--- blue wheels -->
    <script>
       $('#h').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/front_wheels/blue_front.png';
        img.onload = function(){
        c.drawImage(img, 471.5, 155, 235, 234);
       }
       return false;
      });
    </script>      
  
    <!--- red wheels -->
    <script>
       $('#i').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/front_wheels/red_front.png';
        img.onload = function(){
        c.drawImage(img, 471.5, 155, 235, 234);
       }
       return false;
      });
    </script>

    <!--- baby blue wheels -->
    <script>
       $('#j').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/front_wheels/baby_blue_front.png';
        img.onload = function(){
        c.drawImage(img, 471.5, 155, 235, 234);
       }
       return false;
      });
    </script>

    <!--- yellow wheels -->
    <script>
       $('#k').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/front_wheels/yellow_front.png';
        img.onload = function(){
        c.drawImage(img, 471.5, 155, 235, 234);
       }
       return false;
      });
    </script>
       
    <!--- black wheels -->
    <script>
       $('#l').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/front_wheels/black_front.png';
        img.onload = function(){
        c.drawImage(img, 471.5, 155, 235, 234);
       }
       return false;
      });
    </script> 

       
<!-- end FRONT WHEEL img loader-->   

<!-- begin BACK WHEEL img loader-->

    <!-- green BACK wheels -->
    <script>
           $('#m').click(function(){
           var canvas = $('#q')[0];
           //canvas.width = canvas.width;//blanks the canvas
           var c = canvas.getContext("2d");
            var img = new Image();
            img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/back_wheels/green_back.png';
            img.onload = function(){
            c.drawImage(img, 96.5, 156, 235, 234);
           }
           return false;
          });
    </script>
  
    <!--- blue BACK wheels -->
    <script>
       $('#n').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/back_wheels/blue_back.png';
        img.onload = function(){
        c.drawImage(img, 96.5, 156, 235, 234);
       }
       return false;
      });
    </script>      
  
    <!--- red BACK wheels -->
    <script>
       $('#o').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/back_wheels/red_back.png';
        img.onload = function(){
        c.drawImage(img, 96.5, 156, 235, 234);
       }
       return false;
      });
    </script>

    <!--- baby blue BACK wheels -->
    <script>
       $('#p').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/back_wheels/baby_blue_back.png';
        img.onload = function(){
        c.drawImage(img, 96.5, 156, 235, 234);
       }
       return false;
      });
    </script>

    <!--- yellow BACK wheels -->
    <script>
       $('#r').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/back_wheels/yellow_back.png';
        img.onload = function(){
        c.drawImage(img, 96.5, 156, 235, 234);
       }
       return false;
      });
    </script>
       
    <!--- black BACK wheels -->
    <script>
       $('#s').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/back_wheels/black_back.png';
        img.onload = function(){
        c.drawImage(img, 96.5, 156, 235, 234);
       }
       return false;
      });
    </script> 

       
<!-- end BACK WHEEL img loader--> 

<!-- begin SEAT img loader-->

    <!-- green SEAT -->
    <script>
           $('#t').click(function(){
           var canvas = $('#q')[0];
           //canvas.width = canvas.width;//blanks the canvas
           var c = canvas.getContext("2d");
            var img = new Image();
            img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/seats/green_seat.png';
            img.onload = function(){
            c.drawImage(img, 245, 26, 100, 31);
           }
           return false;
          });
    </script>
  
    <!--- blue SEAT -->
    <script>
       $('#u').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/seats/blue_seat.png';
        img.onload = function(){
        c.drawImage(img, 245, 26, 100, 31);
       }
       return false;
      });
    </script>      
  
    <!--- red SEAT -->
    <script>
       $('#v').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/seats/red_seat.png';
        img.onload = function(){
        c.drawImage(img, 245, 26, 100, 31);
       }
       return false;
      });
    </script>

    <!--- baby blue SEAT -->
    <script>
       $('#w').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/seats/baby_blue_seat.png';
        img.onload = function(){
        c.drawImage(img, 245, 26, 100, 31);
       }
       return false;
      });
    </script>

    <!--- yellow SEAT -->
    <script>
       $('#x').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/seats/yellow_seat.png';
        img.onload = function(){
        c.drawImage(img, 245, 26, 100, 31);
       }
       return false;
      });
    </script>
       
    <!--- black SEAT -->
    <script>
       $('#y').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/seats/black_seat.png';
        img.onload = function(){
        c.drawImage(img, 245, 26, 100, 31);
       }
       return false;
      });
    </script> 

       
<!-- end SEAT img loader-->

<!-- begin GRIPS img loader-->

    <!-- green GRIPS -->
    <script>
           $('#z').click(function(){
           var canvas = $('#q')[0];
           //canvas.width = canvas.width;//blanks the canvas
           var c = canvas.getContext("2d");
            var img = new Image();
            img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/grips/green_grips.png';
            img.onload = function(){
            c.drawImage(img, 511, 35, 60, 39);
           }
           return false;
          });
    </script>
  
    <!--- blue GRIPS -->
    <script>
       $('#aa').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/grips/blue_grips.png';
        img.onload = function(){
        c.drawImage(img, 511, 35, 60, 39);
       }
       return false;
      });
    </script>      
  
    <!--- red GRIPS -->
    <script>
       $('#ab').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/grips/red_grips.png';
        img.onload = function(){
        c.drawImage(img, 511, 35, 60, 39);
       }
       return false;
      });
    </script>

    <!--- baby blue GRIPS -->
    <script>
       $('#ac').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/grips/baby_blue_grips.png';
        img.onload = function(){
        c.drawImage(img, 511, 35, 60, 39);
       }
       return false;
      });
    </script>

    <!--- yellow GRIPS -->
    <script>
       $('#ad').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/grips/yellow_grips.png';
        img.onload = function(){
        c.drawImage(img, 511, 35, 60, 39);
       }
       return false;
      });
    </script>
       
    <!--- black GRIPS -->
    <script>
       $('#ae').click(function(){
       var canvas = $('#q')[0];
       //canvas.width = canvas.width;//blanks the canvas
       var c = canvas.getContext("2d");
        var img = new Image();
        img.src = 'http://sulley.cah.ucf.edu/~jo795082/singular_cycles/images/grips/black_grips.png';
        img.onload = function(){
        c.drawImage(img, 511, 35, 60, 39);
       }
       return false;
      });
    </script> 

       
<!-- end grips img loader-->      

</body>    
</html>
Displaying canvas.html.