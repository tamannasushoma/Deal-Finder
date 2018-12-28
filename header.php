<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style> .logo{margin-bottom: -5px;} 
    .navbar-nav > li{
  margin-left:20px;
  margin-right:20px;
}
.navbar-nav > ul{
  margin-left:30px;
  margin-right:30px;
}

</style>

</head>

<body class="bg-light" >
        

        <nav class="navbar navbar-expand-sm bg-info navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">SalesFreak</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Deals</a>
    </li>
    
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="store.php" id="navbardropdown" data-toggle="dropdown">
        Stores
      </a>
      <div class="dropdown-menu">

        <a class="dropdown-item" href="https://www.amazon.com/international-sales-offers/b/?ie=UTF8&node=15529609011&ref=nav_navm_intl_deal_btn">Amazon</a>
        <a class="dropdown-item" href="#">Aarong</a>
        <a class="dropdown-item" href="#">Pickaboo</a>
      </div>
</li>

      <li class="nav-item">
      <a class="nav-link" href="catagories.php">Catagories </a>
    </li>
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</li>
  </ul>

  <ul class=" navbar-nav navbar-right">
    <li class="nav-item">
      <a class="nav-link" href="signup.php">Signup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">login</a>
    </li>
    </ul>
</nav>
<br>

</body>
</html>