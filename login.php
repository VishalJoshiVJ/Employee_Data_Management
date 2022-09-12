
<?php

try{
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    

if (isset($_POST['submit']))
{
    
	$conn = oci_connect('SYSTEM','vishal','localhost/XE');
    if(!$conn){
        $m=oci_error();
        echo $m['message'], "\n";
        exit;
    }


$email=$_POST['email'];
$pw=$_POST['pw'];

$sql = "SELECT * FROM COMPANY_LOGIN WHERE EMAIL = '$email' AND PASSWORD = '$pw'";
$sql_result = oci_parse($conn, $sql);
    
        oci_execute($sql_result);
            
		$user = oci_fetch_assoc($sql_result);
    
       
		if(!empty($user)){
			$_SESSION['user_info'] = $user['EMAIL'];
			$message='Logged in successfully';
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else{
			$message = 'Wrong email or password.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";

if(isset($_SESSION['user_info'])  && $user['EMAIL'] === $email && $user['PASSWORD'] === $pw){
    $query = "UPDATE COMPANY_LOGGEDIN SET EMAIL = '$email'";
        $res = oci_parse($conn, $query);
        oci_execute($res);
 	header("location: home.php");
 }
}
}
    
 if (isset($_POST['register']))
{
    
	$conn = oci_connect('SYSTEM','vishal','localhost/XE');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {   
    $email = $_POST['uname'];
    $pass = $_POST['pass'];
    $confirmPass = $_POST['confirmPass'];
    
    if($pass === $confirmPass){
        $query = "INSERT INTO COMPANY_LOGIN VALUES('$email','$pass')";
        $res = oci_parse($conn, $query);
        oci_execute($res);
        echo "<script type='text/javascript'>alert('Registered successfully');</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Passwords are not matching');</script>";
    }
    }
    
}
    }catch(Exception $e){
            echo "<script type='text/javascript'>alert('Something went wrong');</script>";
        }

?>
<!DOCTYPE html>


<html>
<head>
    <title>Login/Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
        <div class = "form-box ">
        <div class = "button-box">
            <div id="btn"></div>
              <button type="button" class="toggle-btn" onclick="login()">Log In</button>
             <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            
            <div class="social-icons">
            <img src="fb.png">
            <img src="tw.png">
            <img src="gp.png">
            </div>
            
            <form id="login" name="form" class="input-group" method = "post" action="login.php">
            <input type ="text" id = "email" name="email" class="input-field" placeholder="Email Id" required>
                <input type ="password" id="pw" name="pw" class="input-field" placeholder="Enter Password">
                <input type="checkbox" class="check-box">Remember password<br><br><br><br>
                
                <button type="submit" name="submit" class="submit-btn">Log In</button>
            </form>
            
             <form id="register" name="form1" method = "post" class="input-group">
            <input type ="text" name="uname" class="input-field" placeholder="Email Id" required>
                 <input type ="password" name="pass" class="input-field" placeholder="Password">
                <input type ="password" name="confirmPass" class="input-field" placeholder="Confirm Password" required>
                <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" name="register" class="submit-btn" >Register</button>
            </form>

        
        
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        
        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
        
    </script>
    </body>
</html>
