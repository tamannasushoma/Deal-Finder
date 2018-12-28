<?php include('header.php'); ?>
<?php require('database.php'); ?>
<?php

    $msg = '';
    $msgClass = '';

    if(filter_has_var(INPUT_POST, 'submit')) {
        $email = $_POST['emailfield'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['pwdfield'];
        $gender = $_POST['gender'];
        $validity = false;

        if(empty($email) || empty($firstname) || empty($lastname) || empty($password)|| empty($gender)) {
            var_dump(empty($email));
            $msg = "Please fill in all fields!";
            $msgClass = "alert-danger";
        } else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = "Please use a valid email!";
            $msgClass = "alert-danger";
        } else if (strlen($password) < 6) {
            $msg = "Please use a password that has at least 6 characters!";
            $msgClass = "alert-danger";
        }

        else {
            $query = "SELECT email FROM users";
            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0) {
                $resultemail = mysqli_fetch_all($result, MYSQLI_ASSOC);

                foreach($resultemail as $dataemail) {
                    if(strcmp($dataemail['email'], $email) === 0) {
                        $msg = "Email is already registered! Use a different email!";
                        $msgClass = "alert-danger";
                        $validity = false;
                        break;
                    } else {
                        $validity = true;
                    }
                }
            } else if($resultCheck === 0) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO users (first_name, last_name, email, password, gender) VALUES ('$firstname', '$lastname', '$email', '$hashed_password', '$gender')";

                if(mysqli_query($conn, $query)) {
                    header("Location: confirmsignup.php");
                }
            }

            if($validity) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO users (first_name, last_name, email, password, gender) VALUES ('$firstname', '$lastname', '$email', '$hashed_password', '$gender')";

                if(mysqli_query($conn, $query)) {
                    header("Location: confirmsignup.php");
                }
            }
            mysqli_free_result($result);
            mysqli_close($conn);
        }

    }


?>

<title> Sign Up </title>
<link rel="stylesheet" type="text/css" href="css/signup.css">
<div class="container">
    <?php if(strlen($msg) != 0) : ?>
        <div class ="text-center alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
        </div>
    <?php endif; ?>

        <div class="jumbotron jumbotron-fluid text-center">
            <div class="h3"> Fill up the following form to signup: </div>

        <form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <input type="firstname" class="form-control textbox" name="firstname" placeholder="First Name" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>">

                    <input type="lastname" class="form-control textbox" name="lastname" placeholder="Last Name" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : ''; ?>">

                    <input type="Email" class="form-control textbox" name="emailfield" placeholder="Email"
                    value="<?php echo isset($_POST["emailfield"]) ? $_POST["emailfield"] : ''; ?>">

                    <input type="password" class="form-control textbox" name="pwdfield" placeholder="Password"
                    value="<?php echo isset($_POST["pwdfield"]) ? $_POST["pwdfield"] : ''; ?>">

                    
                </div>

                <div class="form-group selectbox">
                    <select class="form-control" id="genderselect" name="gender">
                        <option> Male </option>
                        <option> Female </option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-danger btn-lg" id="submit" name="submit" value="Sign Up">
                </div>
                
            </form>
        </div>
</div>
<?php include('footer.php'); ?>
