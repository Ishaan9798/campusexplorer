<?php
	session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>W.O.D</title>
    <link rel="stylesheet" href="assets/css/master.css">
    <style>
      /*.button{
        font-family: "Comic Sans MS";
        text-decoration:none;
          background-color: black;
      border: none;
      color: rgb(200,200,200);
      background:black;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      transition: all 0.5s;
      cursor: pointer;
      float: right;
      }
   .button span:after{
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

 .button:hover span {
  padding-right: 25px;
}

 .button:hover span:after {
  opacity: 1;
  right: 0;
}*/

    </style>

  </head>

  <body>
    <nav>
      <a href="C:\wamp64\www\class\master.php">
      <span class="site-logo">
      <img src="assets/images/logo.png" alt="w.o.d">
    </span></a>
  <div class="btn-group">
    <!-- <a href="C:\Users\Sree Hari K\Desktop\class notes\DANCE WEBSITE\abt\abtus.html"></a> -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <span class="button">
    Welcome <strong><?php echo $_SESSION['username']; ?></strong></span>
      <span class="button"> <a href="index.php?logout='1'" style="color:white; text-decoration:inherit;">Logout</a> </span>
    <?php endif ?>
    <button class="button" id="contct"><a href="contact.html"><span>Contact</span></a></button>
    <button class="button" id="abt"><a href="abt/abtus.html"><span>About Us</span></a></button>
    <button class="button" id="sgnin"><a href="login.php"><span>Sign-In</span></a></button>
    <button class="button" id="sgnup"><a href="register.php"><span>Sign-Up</span></a></button>

  </div>
    </nav>

    <header>
      <!-- <div class="site-logo">
        <img src="assets/images/logo.jpg" alt="w.o.d">
      </div> -->
      <div id="darker">


      <div id="title-head">
        <hr>
        <br>
        <pre><h1>W E L C O M E <br>T O  T H E <br> W O R L D  O F <br> D A N C E </h1>
        </pre>
        <hr>
        <br>
        <p>Experience Dance In A Whole New Dimension</p>
      </div>
    </div>
    </header>
    <!--<div id="sign-up">
      <img src="assets/images/man.jpg" alt="mj">
      <p></p>
      <br>
      <br>
    </div-->
    <div id="register">

    </div>
    <div id="clearing"></div>
    <div id="styles-container">
      <h1><i>Our Various Styles</i></h1>
      <div id="styles">
        <ul>
          <a href="C:\Users\Sree Hari K\Desktop\DANCE WEBSITE\bboy.html"><li id="hiphop"></li></a>
          <li id="popping"><a href="#"></a></li>
          <li id="krump"><a href="#"></a></li>
          <li id="tango"><a href="#"></a></li>
          <div id="clearing"></div>
          <li id="kpd"><a href="#"></a></li>
          <li id="salsa"><a href="#"></a></li>
          <li id="ballet"><a href="#"></a></li>
          <li id="btn"><a href="#"></a></li>

        </ul>
      </div>
    </div>
    <div id="contact">
      <form class="" action="master.php" method="POST">

        <h1>Subscribe to our newsletter and never miss a thing!</h1>
        <input type="email" name="maill" placeholder="enter your email id here">
        <div id="gif">
          <img id="bd" src="assets/bd.gif" alt="gif">
        </div>
        <!-- <textarea name="name" rows="8" cols="80"></textarea> -->
        <button type="button" name="newsmail">Submit</button>
      </form>
    </div>
    <footer>
      <ul>
        <a href="https://www.facebook.com/worldofdancephilippines/" target="_blank"><li id="facebook"></li></a>
        <li>|</li>
        <a href="https://www.instagram.com/worldofdance/?hl=en" target="_blank"><li id="insta"></li></a>
        <li>|</li>
        <a href="https://www.youtube.com/user/WORLDOFDANCETOUR" target="_blank"><li id="yt"></li></a>
        <li>|</li>
        <a href="https://twitter.com/nbcworldofdance?lang=en" target="_blank"><li id="twit"></li></a>
      </ul>
      <br>
      <p>© 2017 World Of Dance | All Rights Reserved</p>
  </footer>
  </body>
</html>
