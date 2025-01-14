
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="file/image/ewallet.png" type="image/x-icon">
</head>
<body>
    <div class="strock"></div>
    <div class="container">
    <?php
session_start();
include_once 'include/cnx.php';
?>
        <!-- *****************register form******************** -->
<?php

if(isset($_POST['register'])){
    $active = 1;
$newmail=$_POST['newmail'];
$newfirstname=$_POST['firstname'];
$newlastname=$_POST['lastname'];
$newphone=$_POST['phone'];
$newpassword=$_POST['newpassword'];
$register=$database->prepare("SELECT * FROM user WHERE email=:newmail");
$register->bindParam("newmail",$newmail);
$register->execute();
if($register->rowCount()>0){
    //طبع رسالة تنبيه ان هدا الحساب مسجل مسبقا هل ترغب بتسجيل الدخول
                          
}else{
    $adduser=prepare("INSERT INTO user(firstname,lastname,email,phone,password,active) 
    VALUES(:firstname,:lastname,:email,:phone,:password,:active)");
$adduser->bindParam("firstname",$newfirstname);                            
$adduser->bindParam("lastname",$newlastname);                            
$adduser->bindParam("email",$newmail);                            
$adduser->bindParam("phone",$newphone);                            
// $adduser->bindParam("adress",);                            
$adduser->bindParam("password",$newpassword);                            
$adduser->bindParam("active",$active);  
$adduser->execute();
}

}

?>
    <div class="register display">
        <h1>Please fill in your information</h1>
        <form method="post">
            <div class="name">

            <div class="fullname">
                <input type="text" required="" name="firstname" class="nameinput">
                 <span class="bar"></span>
                 <label class="label">
                 <span class="labelchar" style="--index:1">F</span>
                 <span class="labelchar" style="--index:2">i</span>
                 <span class="labelchar" style="--index:3">r</span>
                 <span class="labelchar" style="--index:4">s</span>
                 <span class="labelchar" style="--index:5">t</span>
                 <span class="labelchar" style="--index:6">&nbsp;</span>
                 <span class="labelchar" style="--index:7">N</span>
                 <span class="labelchar" style="--index:8">a</span>
                 <span class="labelchar" style="--index:9">m</span>
                 <span class="labelchar" style="--index:10">e</span>
                 </label>
            </div>

            <div class="fullname">
                <input type="text" required="" name="lastname"  class="nameinput">
                 <span class="bar"></span>
                 <label class="label">
                 <span class="labelchar" style="--index:1">L</span>
                 <span class="labelchar" style="--index:2">a</span>
                 <span class="labelchar" style="--index:4">s</span>
                 <span class="labelchar" style="--index:5">t</span>
                 <span class="labelchar" style="--index:6">&nbsp;</span>
                 <span class="labelchar" style="--index:7">N</span>
                 <span class="labelchar" style="--index:8">a</span>
                 <span class="labelchar" style="--index:9">m</span>
                 <span class="labelchar" style="--index:10">e</span>
                 </label>
            </div>

            </div>
            <div class="regiwave">
                <input type="text" required="" name="newmail" class="regiemail">
                 <span class="bar"></span>
                 <label class="label">
                 <span class="labelchar" style="--index:1">E</span>
                 <span class="labelchar" style="--index:2">m</span>
                 <span class="labelchar" style="--index:3">a</span>
                 <span class="labelchar" style="--index:4">i</span>
                 <span class="labelchar" style="--index:5">l</span>
                 <span class="labelchar" style="--index:6">&nbsp;</span>
                 <span class="labelchar" style="--index:7">a</span>
                 <span class="labelchar" style="--index:8">d</span>
                 <span class="labelchar" style="--index:9">d</span>
                 <span class="labelchar" style="--index:10">r</span>
                 <span class="labelchar" style="--index:11">e</span>
                 <span class="labelchar" style="--index:12">s</span>
                 <span class="labelchar" style="--index:13">s</span>

                 </label>
            </div>
            
            <div class="regiwave">
                <input type="number" required=""name="phone"  class="regiemail">
                 <span class="bar"></span>
                 <label class="label">
                 <span class="labelchar" style="--index:1">P</span>
                 <span class="labelchar" style="--index:2">h</span>
                 <span class="labelchar" style="--index:3">o</span>
                 <span class="labelchar" style="--index:4">n</span>
                 <span class="labelchar" style="--index:5">e</span>
                 <span class="labelchar" style="--index:6">&nbsp;</span>
                 <span class="labelchar" style="--index:7">n</span>
                 <span class="labelchar" style="--index:8">u</span>
                 <span class="labelchar" style="--index:9">m</span>
                 <span class="labelchar" style="--index:10">b</span>
                 <span class="labelchar" style="--index:11">e</span>
                 <span class="labelchar" style="--index:12">r</span>


                 </label>
            </div>
            <div class="regiwave">
                <input type="password" required="" name="newpassword"  class="regiemail">
                 <span class="bar"></span>
                 <label class="label">
                 <span class="labelchar" style="--index:1">P</span>
                 <span class="labelchar" style="--index:2">s</span>
                 <span class="labelchar" style="--index:3">s</span>
                 <span class="labelchar" style="--index:4">w</span>
                 <span class="labelchar" style="--index:5">o</span>
                 <span class="labelchar" style="--index:6">r</span>
                 <span class="labelchar" style="--index:7">d</span>
                 </label>
            </div>
            <div class="term">
                <input type="checkbox">
                <h6>I agree to the <a href="#">Terms and Conditions</a></h6>
            </div>
            <button type="submit" name="register">Sign up</button>
        </form>
    </div>
    <div class="content" id="content">
        <h1 class="h1">Welcome Back <br> in NewCoins</h1>

        <h4 class="h4">New here?</h4>
        <button id="gosignup">Sign up</button>
        <button class="gologin">Login</button>
    </div>
   
    <!-- *********************loginform******************** -->
    <div class="form">
        <h1>Log In</h1>
<?php

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $login =$database->prepare("SELECT * FROM user WHERE email=:Email AND password=:Password");
    $login->bindParam("Email",$email);
    $login->bindParam("Password",$password);
    $login->execute();
    if($login->rowCount()===1){
        $user = $login->fetchObject();
        if($user->active=="true"){
            header("location:home.php",true);
        }else{
        // وضع رسالة تنبيه لتاكيد الحساب مع زر لصفحة التاكيد
        }
    }else{
        //طبع رسالة تنبيه بان كلمة المرور او الامايل خاطا
    };
    };
    

?>
        <form method="post" class="login">
            <div class="wave">
                <input type="email" required="" name="email"  class="email">
                 <span class="bar"></span>
                 <label class="label">
                 <span class="labelchar" style="--index:1">E</span>
                 <span class="labelchar" style="--index:2">m</span>
                 <span class="labelchar" style="--index:3">a</span>
                 <span class="labelchar" style="--index:4">i</span>
                 <span class="labelchar" style="--index:5">l</span>
                 <span class="labelchar" style="--index:6">&nbsp;</span>
                 <span class="labelchar" style="--index:7">a</span>
                 <span class="labelchar" style="--index:8">d</span>
                 <span class="labelchar" style="--index:9">d</span>
                 <span class="labelchar" style="--index:10">r</span>
                 <span class="labelchar" style="--index:11">e</span>
                 <span class="labelchar" style="--index:12">s</span>
                 <span class="labelchar" style="--index:13">s</span>

                 </label>
            </div>
            

            <div class="wave">
                <input type="password" required="" name="password"  class="email">
                 <span class="bar"></span>
                 <label class="label">
                 <span class="labelchar" style="--index:1">P</span>
                 <span class="labelchar" style="--index:2">s</span>
                 <span class="labelchar" style="--index:3">s</span>
                 <span class="labelchar" style="--index:4">w</span>
                 <span class="labelchar" style="--index:5">o</span>
                 <span class="labelchar" style="--index:6">r</span>
                 <span class="labelchar" style="--index:7">d</span>
                 </label>
            </div>
                <div class="forgot">
            <a href="forgotpass.php">Forgot password?</a>
                </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    </div>
 <script src="js/gosignup.js"></script>
</body>
</html>

