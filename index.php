<?php
session_start();
if(isset($_GET['vid']))
{
	session_destroy();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WireX Technologies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="css/anotherhome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
   <link rel = "icon" type = "image/png" href = "/btaoicon.png">
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--it is for sociamedia icons-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="usersontxt.php?uvon=showon"></script>
  
  <style>
  	      
   /* navigation bar css is starts here*/
.navigation    ul {
    list-style-type: none;
    margin-left:-30px;
    padding:0px;
    width:115%;
    margin-top:-15px;
    overflow: hidden;
    background-color:#50007B;
    text-decoration:none;
    color:white;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.navigation li {
display: inline;

margin-left:5px;
}

.navigation li a {
    display: block;
    color: white;
    text-align: center;
  
    padding:14px 40px;
    text-decoration: none;


}


.navigation li a:hover { 
 background-color:white;
 color:black;
    box-shadow: 0 44px 0 dolor:white;arkred;
    padding: 1em 1.5em;

}

 .alinks {
    animation: myfirst 2s 50;
   
}
.alinks2{
     animation: arrow 3s 50;
    
}
.glyphicon-chevron-up{
    font-size:40px;
    background-color:black;
    color:blue;
    padding:5px;
}

@keyframes myfirst
{100%      {color:white;}
 100%      {color:white;}
100%      {color:white;}
   100%      {color:red;}

   100%      {color:red;}
      100%      {color:red;}
   100%      {color:red;}
      100%      {color:red;}

}
@keyframes arrow
{10%      {color:white;}
 40%      {color:blue;}
60%      {color:yellow;}
   70%      {color:red;}
80%      {color:white;}
 90%      {color:blue;}
60%      {color:yellow;}
   100%      {color:red;}

}
  </style>
</head>
<body style="background-color:black;">
    <script>
        window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
}
function scrollWin()	
{
  window.scrollTo(0,-5);
}

function scrollWin2()	
{
  window.scrollTo(0,550);
}
  
  
function scrollWin3()	
{
  window.scrollTo(0,1100);
}

function scrollWin4()	
{
  window.scrollTo(0,1700);
}
function scrollWin5()	
{
  window.scrollTo(0,2100);
}

  </script>

   
 <header class="container-fluid navbar-fixed-top" align="center" style="background-color:#50007B; color:white;  width:100%;">
<h3 style="padding:4px;color:white;" >WireX Technologies

  <p class="navbar-toggle glyphicon glyphicon-list btn btn-primary btn-lg " onclick=" scrollWin();" style="margin-top:-7px; color:white;" data-toggle="collapse"  data-target="#myNavbar">
          
    
      </p></h3> 
    
</header><br><br><br><br>

<nav class=" navigation " style="width:100%; ">
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
<ul  class="nav navbar-nav">
   
<div class="navbar-header">
     
    </div>

<li><strong><a  href="index.php" >HOME</a></strong></li>
   <li><strong><a  href="service.php" >SERVICES</a></strong></li>
   <li><strong><a  href="products.php" >PRODUCTS</a></strong></li>
  <li><strong><a  href="training.php" >Training Programs</a></strong></li>

   <li><strong><a  href="about.php" >About</a></strong></li>
    <li><strong><a  href="login.php" >Login</a></strong></li>



</ul>
</div>
</div>
</nav>


<div >
  
  <div id="myCarousel" class=" carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      
   
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active ">
        <img src="logo.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      

      <div class="item">
        <img src="Ai.jpg" alt="New york" style="width:100%;">
      </div>
   
   
      <div class="item">
        <img src="iot.jpg" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="webi.jpg" alt="New york" style="width:100%;">
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br><br><br>
  <h1 align="center" style="color:yellow">WireX Technologies <br>Creation Of New Life</h1>
 </div>

<br><br>

<div class="container-fluid" style="background-color:white;padding:10%;width:100%;height:80vh;margin-top:15%;">
    <h1>A Platform to build innovative Software and Hardware Products</h1>
    <h3>Our Products:-</h3>
    
</div>

<div style="background-color:#76F866;color:black;padding:10%;width:100%;height:80vh;">
    <h1>A Platform to the Students Who are Having Brillient Technical
    Stuff Rather Than B.tech Degrees..</h1>
   
</div>
<div style="background-color:white;color:black;padding:10%;width:100%;height:80vh;">
  <h1 >We Providing Free Online Trainings, To the Students Who Are Passionate About Technology and Innovation</h1>
    
</div>
<div style="background-color:Black;color:yellow;width:100%;padding:10px;height:50vh;">
 
<strong><h3 align="center" >WireXTechnologies were going to solve problems in a smart way </h3></strong><br>
<h3 align="center" style="color:white;">Supported By</h3>
    <div align="center" >
    <a href="https://www.youtube.com/channel/UC4axot1mQvXljkow92s54Xg"   style="color:yellow;" class="fa fa-youtube fa-2x social social-youtube alinks"> <br>Prashanth TechTuts</a>
    </div>
    <button class="glyphicon glyphicon-chevron-up alinks2" style="border-radius:40px;margin-left:83%;margin-top:-88%;"  onclick=" scrollWin();"></button>
</div>



<footer style="background-color:#50007B;width:100%;color:white;position:relative;bottom:0px;padding:10px">
    
<h6 align="center" >    All Copyrights Are Reserved to WireX Technologies@2019</h6>
</footer>
</body>
</html>