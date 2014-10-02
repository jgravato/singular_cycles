<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <title>Bike Company</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>
    <script src="js/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
    <?php include 'header.php';?>
    </div>
	<div class="container">
		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <a href="bikes.html"><img src="images/branding.png" alt=""></a>
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                    <a href="bikes.html"><img src="images/sale.png" alt="Damn Son"></a>
                  <div class="carousel-caption"></div>
                </div>
                <div class="item">
                    <a href="bikes.html"><img src="images/limited.png" alt="Damn Son"></a>
                  <div class="carousel-caption"></div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
        </div>
        <div class="row">
                <div><li class="divider"></li></div>
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                        <a href="bikes.html"><img src="images/bike_front.png" class="img-responsive"></a>
                        <p><h2><center>Bicycles</center></h2></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                        <a href="parts.html"><img src="images/part_3.png" class="img-responsive"></a>
                        <p><h2><center>Parts</center></h2></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                        <a href="accessories.html"><img src="images/acc_2.png" class="img-responsive"></a>
                        <p><h2><center>Accessories</center></h2></p>
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <image src="images/banner.png" class="img-responsive"></image>
                </div>
                <h6><center>©2014 SINGULAR CYCLE COMPANY | EDUCATIONAL PURPOSES ONLY</center></h6>
            </div>
		</div>
	</div>
</body>
</html>