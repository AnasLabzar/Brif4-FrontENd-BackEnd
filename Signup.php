<?php

include("./connect.php");
session_start();

if(isset($_POST['submit'])){
  $email=htmlspecialchars(strtolower(trim($_POST['Email2'])));
  $mdpss=htmlspecialchars(trim($_POST['mdpss']));
  $DateNaissance=htmlspecialchars(strtolower(trim($_POST['DateNaissance'])));
  $nom=htmlspecialchars(strtolower(trim($_POST['nom2'])));
  $gender=htmlspecialchars(strtolower(trim($_POST['Gender'])));
  $query = "INSERT INTO etudiant (Email2,mdpss,DateNaissance,nom2,Gender)VALUES('$email','$mdpss','$DateNaissance','$nom','$gender')";
  if(mysqli_query($con,$query)){
    header("Location:./login.php");;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ynov | Calculus I | SignUp</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body onload='document.form.Email2.focus()'>
<form class="login_form" action="" method="post" name="form" onsubmit="return validated()">
    <div class="rect_login">
        <div class="logo_login">
            <a href="./index.html">
            <img src="./chartegraphique/logo.png">
        </a>
        </div>
        <div class="text_login">
            <p class="we_login">Welcom</p>
            <p class="we2_login">Sign Up to continue to Ynov</p>
        </div>
        
                <input placeholder="yours@example.fr" type="text" name="Email2" class="input" required>
                <input placeholder="Your password" type="password" name="mdpss">
                <input placeholder="dd/mm/yyyy" type="date" name="DateNaissance" min="1920" max="2002-12-31">
                <input placeholder="First name / Last name" type="text" name="nom2">
                <input placeholder="Gender" type="text" name="Gender">
                <p class="ex_gender">Example : Man / woman / others</p>

        
        <div class="f_psw_login">
            <a href="./login.html">
            <p>Do you already have an account ?</p>
        </a>
        </div>
        <button type="submit" name="submit" onclick="validationInput(document.form.Email2)" >Continue</button>
    </div>
    </div>
    </form>
    <script>
     function validationInput(inputText)
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