<?php
    include('database.php');
    session_start();
    
    $user_check = $_SESSION['login_user'];
    
    $ses_sql = mysqli_query($conn, "SELECT email FROM users WHERE emil = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    
    $login_session = $rows['email'];
    
    if(!isset($_SESSIONs['login_user'])){
        header("location:login.php");}
        ?>