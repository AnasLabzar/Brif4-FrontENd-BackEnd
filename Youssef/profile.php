<?php

include("./connect.php");
session_start();

if(isset($_POST['submit'])){
  $email=htmlspecialchars(strtolower(trim($_POST['email'])));
  $psw=htmlspecialchars(trim($_POST['psw']));
}
?>



<!DOCTYPE html>
<html lang="en"> 

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>


</head>

<body>
  <div class="nav-bar">
    <div class="container">
      <a href="file:///C:/Users/admin/Desktop/Brif%204/HTML%20&%20SASS%20&%20JS/index.html">
        <img id="logo-img1" src="logo_WHITE.png" alt="logo">
        <img id="logo-img2" src="logo_green.png" alt="logo">
      </a>
      <div class="burger">
        <h5>person@email.com</h5>
        <div class="menu">
          <img style="width: 60%;" src="BURGER.svg" alt="burger">
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="menun">
      <img src="file:///C:/Users/admin/Desktop/fk/Union%201.png">
    </div>
    <ul hidden>
      <li><a href=""> > Student Dashboard </a> </li>
      <li><a href=""> > Settings </a> </li>
      <li><a href=""> > Contact </a> </li>
      <li><a href=""> > Log out </a> </li>
    </ul>
  </nav>
  <div class="containerSelction">
    <div class="contenu">
      <h1>My Profile</h1>
      <img src="Ellipse.png" alt="elipse" width="110px">

      <div class="contai">
        <div class="fog">
          
            <p>STUDENT</p>
          </div>
          <div class="lissr">
            <h3>Notifications</h3>
            <p>I agree to receive my notifications by email</p>
          </div>
        </div>
        <div class="lta7t">
          <div class="ta7t">
            <div class="lim1">
            <h3>Contact</h3>
            <p>youssef.ezzohayly98@gmail.com</p>
            </div>
            <div class="lissr1">
             <h3>Language</h3>
             <p>English</p>
            </div>
          </div>
        </div>
      </div>
</a>
      <a href="setting.html"><button class="button button1"><b>Settings</b></button></a>
      <a href="../../login.php"><button class="button button2"><b>Logout</b></button></a>
    </div>
  </div>



<div class="mini-title">
  <h1 >My skills</h1>
</div>
  <div class="containermini">


    <div class="minicontainerSelction1">
      <img src="progression.png" alt="progression">
      <div class="barre">level 1 imitate</div>
      <div style="position: absolute; top: 60% ;left: 32% ;">1 level 1 validated</div>
    </div>
    <div class="minicontainerSelction2">
      <img src="progression.png" alt="progression">
      <div class="barre">level 2 adapted</div>
      <div style="position: absolute; top: 60% ;left: 32% ;">1 level 2 validated</div>
    </div>

  </div>
  <div class="minicontainerSelction3">
    <img src="progression.png" alt="progression">
    <div class="barre">level 3 transpose</div>
    <div style="position: absolute; top: 60% ;left: 32% ;">1 level 3 validated</div>
  </div>


  </div>
  </div>
  </div>
  <button data-modal-target="#modal"><img class="button-chat"
      src="Feedback-icon.png" alt="chat"></button>
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title1">HOW CAN WE HELP ?</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
      <div class="icon1">
        <img src="A.png" alt="A">
      </div>
      <div>
        <h3>Help Center</h3>
        <p>Answers to fequently asked questions</p>
      </div>
    </div>
    <div class="modal-body">
      <div class="icon1">
        <img src="B.png" alt="B">
      </div>
      <div>
        <h3>Student success</h3>
        <p>Help with general questions or issues</p>
      </div>
    </div>
    <div class="modal-body">
      <div class="icon1">
        <img src="C.png" alt="c">
      </div>
      <div>
        <h3>Feedback</h3>
        <p>Let us know how we're doing!</p>
      </div>
    </div>


  </div>
  </div>
  <div id="overlay"></div>

</body>

</html>