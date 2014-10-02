<!DOCTYPE html>
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

    <!-- Navigation -->
        <?php include 'includes/header.php';?>
        </div>
<!--End Navigation -->

    <div class="container">
        <form role="form">
        <div><li class="divider"></li></div>
        <div><li class="divider"></li></div>
        <h2>What's on your mind?</h2>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">        
            <label>Comments and Questions</label>
            <textarea class="form-control" rows="3" placeholder="Comments and Questions"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
        </form>
    
        
<!--Footer -->   
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <image src="images/banner.png" class="img-responsive"></image>
            </div>
        </div>

    <footer>
        <h6><center>©2014 SINGULAR BICYCLES COMPANY | EDUCATIONAL PURPOSES ONLY</center></h6>
        </footer>
    </div>

</body>
</html>