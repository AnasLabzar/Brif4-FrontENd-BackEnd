<?php
include("./connect.php");

session_start();
if(isset($_POST['submit'])){
    $email=htmlspecialchars(strtolower(trim($_POST['Email2'])));
    $mdpss=htmlspecialchars(trim($_POST['mdpss']));
    
    $query = "SELECT * FROM etudiant WHERE Email2='$email' && mdpss='$mdpss'";
    if(mysqli_num_rows(mysqli_query($con,$query))>0){
        $_SESSION['Email2']=$email;
        $_SESSION['mdpss']=$mdpss;
        header("Location:./Youssef/profile.html");
        
    }else{
        header("Location: login-error.php");
    }
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ynov | Calculus I | Login</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body onload='document.form1.text1.focus()'>
    <form class="login_form" action="" method="post" name="form1" onsubmit="return validated()">
        <div class="rect_login">
            <div class="logo_login">
                <a href="./index.html">
                    <img src="./chartegraphique/logo.png">
                </a>
            </div>
            <div class="text_login">
                <p class="we_login">Welcom</p>
                <p class="we2_login">Log in to continue to Ynov</p>
            </div>
            <input placeholder="Email Adress" type="text" name="Email2" class="input" required>
            <input placeholder="Password" type="password" name="mdpss">
            <div class="f_psw_login">
                <p>Forgot Password?</p>
            </div>
            <button type="submit" name="submit"onclick="ValidateEmail(document.form1.Email2)">Continue</button>
            <div class="khatt_login"></div>
            <div class="signup_login">
                <p>
                    Don't have an account? <a href="SIGNUP.html"><span>Create Account</span></a>
                </p>
            </div>
        </div>
    </form>
    <script>
    function ValidateEmail(inputText)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{
alert("Valid email address!");
console.log("Valid email address");
document.form1.text1.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
}
}
</script>
</body>

</html>