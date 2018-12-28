<?php include('header.php'); ?>
<?php require('database.php'); ?>

<?php session_start(); 


   //if($_SERVER["REQUEST_METHOD"] == "POST")
    //$myemail = mysqli_real_escape_string($conn,$_POST['email']);
    //$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
    
    if(isset($_POST['loginbtn'])) {
        $myemail = $_POST['email'];
        $mypassword = $_POST['password'];
    
    $sql = "SELECT user_id FROM users WHERE email = '$myemail' and password = '$mypassword' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    if($count== 1){
        session_register("myemail");
        $_SESSION['login_user'] = $myemail;
        
        header("location: home.php");
} 
    else{
        echo "INVALID EMAIL OR PASSWORD" ;}
    }
    ?>

<title> Login </title> 

    <div class="container">
    <link rel="stylesheet" type="text/css" href="css/signup.css">


        <div class="jumbotron jumbotron-fluid text-center">
            <div class="h2"> Login </div>
            <form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            	<div class="form-group">
            		<input type="Email" class="form-control textbox" name="email" placeholder="Email" >
            		<input type="password" class="form-control textbox" name="password" placeholder="Password" >
            	</div>
            	<div class="form-group">
                    <input type="submit" class="btn btn-danger btn-lg" name="loginbtn" id="submit" value="Login">
                </div>
            </form>
        </div>
        </div>
