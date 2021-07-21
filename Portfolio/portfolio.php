<?php

$messageSent = false;

if (isset($_POST['submit'])) {


  $userName = $_POST['name'];
  $userEmail = $_POST['email'];
  $messageSubject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "jalenmcleod2348@gmail.com";
  $body = "";

  $body .= "From: ".$userName. "\r\n";
  $body .= "Email: ".$userEmail. "\r\n";
  $body .= "Message: ".$message. "\r\n";

  mail($to,$messageSubject,$body);

  $messageSent = true;

}


?>



<!DOCTYPE html>
<html>
<title>Jalen Mcleod</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
<link rel="icon" href="img/jd-cropped (1).png">
<script src="https://kit.fontawesome.com/8988caf6d0.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

html {
  scroll-behavior: smooth;
}

.flex {
  display: flex;
}

.flex1 {
  flex: 1;
}

.skills {
  display: flex;
  justify-content: center;
}

.skills h5 {
  font-size: 95%;
  opacity: 0.8;
}

.lang1 {
  flex: 1;

}

.lang2 {
  flex: 1;

}

.lang3 {
  flex: 1;

}

.lang4 {
  flex: 1;

}

.lang5 {
  flex: 1;

}



.btn {
  text-decoration: none;
  color: black;
  opacity: 0.6;
}

.icons {
  position: relative;
  right:1%;
}

.icons i {
  padding-left: 2%;
}

.btn:hover{
  opacity: 1;
}

.center {
  position: relative;
  left:24%;
}

.flex-card {
  display:flex;
  justify-content: center;
}

.card-space{
margin-right:5%;
}

.card-pic{
  width:300px;
  height:300px;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 10px;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-radius: 10px;
}

.flip-card-front {
  background-color: white;
  color: black;
}

.flip-card-back {
  background-color: #3edbf0;
  color: white;
  transform: rotateY(180deg);
}

.card-project{
  text-decoration: none;
  border-style: solid;
  padding:2%;
  position:relative;
  top:10%;
}

.card-project:hover{
  opacity: 0.8;
}

.email input, textarea, button {
  margin-top: 2%;
  border-radius: 10px;
  border-style: solid;
  border-width: thin;
  border-color: #3edbf0;
  /* box-shadow: 0.25px 0.25px 0.6px 0.6px  #3edbf0; */
  opacity: 0.8;
}



.email button {
  padding: 0.5rem;
  cursor: pointer;
}

.email button:hover {
  opacity: 1;
}

input[type=text]:focus {
  border: 3px solid #3edbf0;
  outline: none;
  -webkit-transition: 0.2s;
}

textarea:focus {
  border: 3px solid #3edbf0;
  outline: none;
  -webkit-transition: 0.2s;
}
/* opacity: 0.88; */
.title {
  opacity: 0;
  border-radius: 10px;
  background-color: grey;
  background-image: linear-gradient(to right, black , #d1d9d9);
  position: relative;
  animation-name: title;
  animation-duration: 3s;
  animation-fill-mode: forwards;
}

@keyframes title {
  from {left: -90%;opacity: 0.5;}
  to {left: 2%;opacity: 0.88;}
}

.title-text {
  font-family: 'EB Garamond', serif; color:white;
}

.p-tag {
  position: absolute;
  bottom:15% ;
  right:1%;
  font-size:2vw;
  opacity: 0;
  animation-name: p-tag;
  animation-duration: 4s;
  animation-fill-mode: forwards;
}

@keyframes p-tag {
  from {right: 1.5%;opacity: 0.5;}
  to {right: 42%;opacity: 0.88;}
}


.btnmove::After{
  content: ' ';
  background-color: #FF3838;
  width: 5vw;
  height: 0.5vw;
  display: block;
}

.w3-xlarge2 {
    font-size: 2vw!important;
}

.w3-padding-large2 {
    padding: 2vw 2vw!important;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('img/bbb.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

.white {
  background-color: white;
  border-radius: 4px;
}

/* Turn off parallax scrolling for tablets and phones */


@media only screen and (max-device-width: 320px) {

  .small {
    font-size: 5vw;
  }

  .w3-wide {
    letter-spacing: 8px ;
  }


}


@media only screen and (max-device-width: 600px) {
  .center{
    left:0;
  }
  .skills  {
    display: inline-block;
  }

  .skills .lang1 h5 {
    font-size: 4vw;
  }

  .skills .lang2 h5 {
    font-size: 4vw;
  }

  .skills .lang3 h5 {
    font-size: 4vw;
  }

  .skills .lang4 h5 {
    font-size: 4vw;
  }

  .skills .lang5 h5 {
    font-size: 4vw;
  }


  .lang1 {
    flex: 1;
    position: relative;
    left: 0%;
  }

  .lang2 {
    flex: 1;
    position: relative;
    right: 0%;
  }




}


@media only screen and (max-device-width: 700px) {
  .flex-card {
    display: inline-block;
    justify-content: center;
  }

  .card-space{
  margin-bottom: 5%;
  }

  .card-pic{
    width:300px;
    height:300px;
  }

  .flip-card {
    background-color: transparent;
    width: 300px;
    height: 300px;
    perspective: 1000px;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 10px;
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 10px;
  }

  .flip-card-front {
    background-color: white;
    color: black;
  }

  .flip-card-back {
    background-color: #3edbf0;
    color: white;
    transform: rotateY(180deg);
  }

  .card-project{
    text-decoration: none;
    border-style: solid;
    padding:2%;
    position:relative;
    top:10%;
  }

  .card-project:hover{
    opacity: 0.8;
  }


}


@media only screen and (max-device-width: 990px) {
.skills h5 {
  font-size: 1.5vw;
}

.hide-small {
  display: none;
}

}


@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}


</style>
<body>

  <!-- <div class="typed">
    <h1>I am <span class="anim" ></span> </h1>
  </div> -->

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <div class="flex">

    <div class="flex1">
    <a href="#home" class=" garamond w3-bar-item btn "> <i class="fas fa-home" ></i> HOME</a>
    </div>
    <div class="flex2">
      <a href="img/webDevResume.pdf" class="w3-bar-item btn w3-hide-small" href="#" download><i class="fas fa-file"></i> RESUME</a>
    </div>
    <div class="flex3">
    <a href="#about" class="w3-bar-item btn w3-hide-small"><i class="fa fa-user"></i> ABOUT ME </a>
    </div>
    <div class="flex4">
    <a href="#portfolio" class="w3-bar-item btn w3-hide-small"><i class="fas fa-briefcase"></i> PROJECTS</a>
    </div>
    <div class="flex5">
    <a href="#contact" class="w3-bar-item btn w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>

    </div>
  </div>
<!-- style="position:absolute; right:43%; top:45%; color:white; font-size: 20px" -->
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#" class="w3-bar-item w3-button" onclick="toggleFunction()" href="#">RESUME</a>
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT ME</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PROJECTS</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class=" bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">

    <span style="" class=" small-title w3-center w3-padding-large2 title w3-grey w3-xlarge2 w3-wide "> <span class="  title-text"> WEB DEVELOPER PORTFOLIO</span>
  </div>
  <div class="typed">
  <p class=" w3-text-grey p-tag hide-small "  >I'm a <span class="white anim"> </span></p>
  </div>
</div>

<!-- Container (About Section) -->
<div style="background-color: grey; background-image: linear-gradient(#fafafa , #d1d9d9);"  class="">

<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em>I love web development</em></p>
  <p>I am a fullstack developer based in the United States that's been coding for over a year now, and still learning new things everyday because the learning never stops in the STEM or web development industry.
     I started coding in high school and decided to take it serious after I graduated. I'm all about growing as a person mentally, and physically. I want to reach
     my full potential in life, so while I help your business grow, it will also help me become a step closer to the the person I want to be. Ever since I was young,
     I've always been a team player, so any role you need me to play, I'll executed it the best of my capabilities.</p>

    <div class=" w3-col m6 w3-center w3-padding-large center ">
      <p><b><i class="fa fa-user w3-margin-right"></i>Jalen Mcleod</b></p><br>
      <img style="border-style: solid;   border-radius: 10px;border-style: solid;border-width: thin;  border-width: ; border-color: #3edbf0;opacity: 0.97;" src="img/jd.png" class="w3-round w3-image  w3-hover-opacity-off" alt="Photo of Me" width="200" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <!-- <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div> -->





</div>

<hr style=" border: 2px solid white; border-radius: 0px;" >

<!-- <hr style="  border: 2px solid white; border-radius: 0px;" > -->
<h2 style=" opacity: 0.8;padding: 12% 12%; " class="w3-xxlarge w3-text-grey w3-wide w3-center ">SKILLS</h2>

<hr style=" border: 2px solid white; border-radius: 0px;" >

<h3 style=" padding: 10% 10%;" class="w3-center small "> LANGUAGES/FRAMEWORKS </h3>

  <!-- <p class="w3-large w3-center w3-padding-16">Skills</p> -->


<div style=" background-image: linear-gradient(to right, grey , #d1d9d9); " class="w3-row w3-center w3-dark-grey w3-padding-16">

<div class="skills">


  <div class="lang1">

    <div class="">
      <h5> <img style="width:10%;" src="img/html.png" alt=""> HTML5</h5>
    </div>

    <div class="">
      <h5> <img style="width:10%;" src="img/css.png" alt=""> CSS</h5>
    </div>

    </div>


    <div class="lang2">

    <div class="">
      <h5> <img style="width:9%;" src="img/js.png" alt=""> Javascript</h5>
    </div>

    <div class="">
      <h5> <img style="width:9%;" src="img/bs.png" alt=""> Bootstrap</h5>
    </div>

    </div>


<div class="lang3">

    <div class="">
      <h5> <img style="width:10%;" src="img/jq.png" alt=""> jQuery</h5>
    </div>

    <div class="">
      <h5> <img style="width:10%;" src="img/php.png" alt=""> PHP</h5>
    </div>

</div>


<div class="lang4">

    <div class="">
      <h5> <img style="width:10%;" src="img/nj.png" alt=""> Node.js</h5>
    </div>

    <div class="">
      <h5> <img style="width:10%;" src="img/npm.png" alt=""> Express.js</h5>
    </div>

    </div>

    <div class="lang5">

    <div class="">
      <h5> <img style="width:10%;" src="img/mysql.png" alt=""> MySQL</h5>
    </div>

    <div class="">
      <h5>  <img style="width:10%;" src="img/aj.png" alt=""> Ajax</h5>
    </div>

    </div>

  </div>

 </div>

</div>

</div>

<div style="background-color: grey; background-image: linear-gradient(#fafafa , #d1d9d9);"  class="">

<!-- Second Parallax Image with Portfolio Text -->
<div id="portfolio" class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-grey w3-wide">PROJECTS</span>
  </div>
</div>

<hr style="  border: 2px solid white; border-radius: 0px;" >
<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" >



  <h3 class="w3-center">MY WORK</h3>
  <p class="w3-center"><em>Here are some of my wbsite projects.<br> Click on the images to view.</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->

</div>

</div>
<div style=" background-image: linear-gradient(to right, grey , #d1d9d9); " class="w3-row w3-center w3-dark-grey w3-padding-16">

  <!-- <div style="position:relative; left:25%;" class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <a href="https://jumpmancloset.herokuapp.com/" target="_blank">
      <img class="w3-hover-opacity" src="img/j.png" style="width:60%; background:white; border-radius:10px;"   >
      </a>
    </div>

    <div class="w3-col m3">
      <a href="http://carblog.website/cms/login.php" target="_blank">
      <img src="img/car.png" style="width:60%; background:white; border-radius:10px;"  class="w3-hover-opacity">
      </a> -->
<div class="flex-card">

<div class="card-space">

  <div  class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/j.png" alt="Avatar" class="card-pic">
    </div>
    <div class="flip-card-back">
      <h1>Jumpman Closet</h1>
      <p>A replica of a athletic online store</p>
      <p>• HTML  • CSS  • Javascript  • Node.js</p>
      <p>• Express.js</p>
      <a class="card-project" href="https://jumpmancloset.herokuapp.com/" target="_blank">View Site</a>
    </div>
  </div>
</div>
</div>

<div  class="">
<div class="flip-card">
  <div  class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/car.png" alt="Avatar" class="card-pic">
    </div>
    <div class="flip-card-back">
      <h1>Car Blog</h1>
      <p>Car social media site</p>
      <p></p>
      <p>• HTML  • CSS  • Javascript  • Bootstrap</p>
      <p>• PHP • MySql</p>
      <a style="cursor:pointer;" onclick="onClick()" class="card-project">View Site</a>
    </div>
  </div>
</div>
</div>
</div>

    </div>
    <!-- <a href="https://jumpmancloset.herokuapp.com/" target="_blank">
    <img class="w3-hover-opacity" src="img/j.png" style="width:60%; background:white; border-radius:10px;"   >
    </a>
    <a href="http://carblog.website/cms/login.php" target="_blank">
    <img src="img/car.png" style="width:60%; background:white; border-radius:10px;"  class="w3-hover-opacity">
    </a> -->

  </div>
</div>


<!-- Modal for full size images on click-->

<div style="background-color: grey; background-image: linear-gradient(#fafafa , #d1d9d9);" class="">


<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
    <p>
      Username: demo1 Password: 123 (Admin) <br>
      Username: demo2 Password: abc (Subscriber) <br>
      Username: demo3 Password: 12345 (Subscriber)
    </p>
    <a class="card-project" href="http://carblog.website/cms/login.php" target="_blank">View Site</a>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div id="contact" class="bgimg-3 w3-display-container w3-opacity-min">
  <div  class="w3-display-middle">
     <span  class="w3-xxlarge w3-text-grey w3-wide">CONTACT</span>
  </div>
</div>

<hr style="  border: 2px solid white; border-radius: 0px;" >

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" >
  <h3 class="w3-center">Information</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- <img src="/w3images/map.jpg" class="w3-image w3-round" style="width:100%"> -->
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Florida, US<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: jdthedev48@gmail.com<br>
      </div>
      <p>Please leave a detailed message here <i class="fas fa-smile-wink"></i> :</p>

      <?php if($messageSent) { ?>

        <h2 style="color:#3edbf0">Successful!</h2>

      <?php } ?>

      <form action="" method="post">
        <div class="email">
        <input type="text" placeholder="Name" name="" value="" required> <br>
        <input type="text" placeholder="Email" name="" value="" required> <br>
        <input type="text" placeholder="Subject" name="" value="">
        <textarea style="width:73%;" placeholder="Message" name="name" rows="8" cols="60" required></textarea> <br>
        <button type="submit" name="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- Footer -->
<footer style="" class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-on ">
  <a style="border-radius: 10px;" href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section icons">
  <a href="https://www.instagram.com/jd_mcleod/?hl=en" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://twitter.com/jd_mcleod305" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  <a href="https://www.linkedin.com/in/jalen-mcleod-94a86318a/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  <a href="https://github.com/jd-mcleod?tab=repositories" target="_blank"><i class="fab fa-github w3-hover-opacity"></i></a>
  </div>
  <p style="position: relative; top:5rem;" > <small> Copyright &copy 2021 Jalen Mcleod. All Rights Reserved </small> </p>
</footer>
<script src="typed.js"></script>
<script>

// Modal Image Gallery
function onClick(element) {
  var carSrc = "img/car.png";
  document.getElementById("img01").src = carSrc;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = "Car Blog";
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


var typed = new Typed('.anim', {
  // Waits 1000ms after typing "First"
  strings: [
    '',

   "FullStack Developer",

   "Team Player"
 ],

 typeSpeed: 100,
 backSpeed: 100,
 loop:true,

});

// $(".btn").mousemove(function() {
//   $(this).toggleClass("btnmove");
// })



</script>



</body>
</html>
