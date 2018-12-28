
<?php include('header.php'); ?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

<title> Welcome to SalesFreak </title>
<style type="text/css">
 .carousel-inner img {
      width: 100%;
      height: 100%;
      
  }
  body {
      background-image: url(storeImage/b2.jpg);
      height: 100%;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
      
  }
  
  </style>
  </head>
<body >
    <div class="container">
    

            <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-responsive" src="storeImage\mega deals promo_0.jpg" alt="SalesFreak" width="500" height="500">
                <div class="carousel-caption">
                    <h3> Are you a sale Freak?</h3>
                   
                </div>
            </div>

            <div class="carousel-item">
            	<img class="img-responsive" src="storeImage\Aliexpress-coupons.png" alt= "Ali-Express" width="500" height="500">
            
            </div>

            <div class="carousel-item">
            <img class="img-responsive" src="storeImage\Daraz_Black_Friday-1024x536.jpg" alt="sec" width="500" height="500">
            
            </div>

            <div class="carousel-item">
                <img class="img-responsive" src="storeImage\samsun-eng-650x360.png" alt="samsung" width="500" height="500">
                
            </div>

            <div class="carousel-item">
                <img class="img-responsive" src="storeImage\aarong.png" alt="aarong" width="500" height="500">
               
            </div>
        
        </div>

  <!-- Left and right controls -->
        <a class="left carousel-control" href="#demo" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#demo" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
</div>

<?php include 'footer.php'; ?>
</body>

