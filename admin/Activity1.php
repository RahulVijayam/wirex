<?php 
session_start();
require_once('config.php');
if(!isset($_SESSION['loginid']) && !isset($_SESSION['pass']) )
{
	header("location:/index.php");
}

if(isset($_GET['vid']))
{
session_destroy();
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
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
    animation: myfirst 2s 5000;
}

@keyframes myfirst
{
   100%      {color:red;}

  
  
 10%      {color:white;}
  50%      {color:red;}
 100%      {color:white;}
  100%      {color:red;}
100%      {color:white;}

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
  window.scrollTo(0,0);
}

function scrollWin2()	
{
  window.scrollTo(0,640);
}
  
  
function scrollWin3()	
{
  window.scrollTo(0,1200);
}

function scrollWin4()	
{
  window.scrollTo(0,1770);
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



    <li><a href="index.php" ><strong>HOME </strong></a> </li>
    
    <li><a href="generatenewbill.php" ><strong>generate smart Bill</strong></a> </li>
        <li><a href="all.php" ><strong>All Students</strong></a> </li>
        <li><strong><a  data-toggle="modal" data-target="#myModal2">Make Payment</a></strong></li>
    
        <li><a href="index.php?vid" ><strong>Logout From Activity 1</strong></a> </li>
  

	      

</ul>
</div>
</div>
</nav>


 



<h3  class="alinks" align="center"><strong>Register New Student Here!</strong></h3>

<form style="width:60%; margin-left:20%; padding:10px; background-color:white;border-style:solid;" method=POST>
<label>Name :-</label>
<input type="text" name="Name" class="form-control" required="required" placeholder="enter your name here"><br>
<label>Emailid :-</label>
<input type="email" name="email" class="form-control" required="required" placeholder="enter your email here"><br>
<label>Mobile Number:-</label>
<input type="number" class="form-control"  name="number" required="required" >


	<div class="form-group">
	<label  >Select Course</label>
	<select class='form-control' name="course" >
	    
    <option ></option>
	<option >Hacking</option>
	<option >Webdesigning</option>
	
</select>
</div>


	<div class="form-group">
	<label  >Amount </label>
	<select class='form-control' name="tamount" >
	    
    <option >300</option>

	
	
	
	
	
	
	
	
	

	
</select>
</div>


	<div class="form-group">
	<label  >Payment Status</label>
	<select class='form-control' name="pstatus" >
	    
    <option ></option>
	<option >Completed</option>
	<option >Pending</option>
	
	
	
	
	
	
	
	
	
	

	
</select>
</div>


<input type="submit" value="Register"  name="submit_btn" style="width:80%; margin-left:10%; margin-bottom:25px; margin-top:20px;" class="btn btn-primary">


</form>
    
     

<section >











  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Update Payment Status  </h4>
        </div>
        <div class="modal-body">
            <form method="POST">
                
                
                <label>Emailid :-</label>
           <?php
            if($stmt = $conn->query("select * from Workshop WHERE pstatus='Pending'")){

echo "<select  name='email'  class='form-control'>";
while ($row = $stmt->fetch_assoc()) {
echo "<option value=$row[email]>$row[email]</option>";
}
echo "</select>";
}else{
echo $con->error;
}
           ?>
             

                
                <input type="submit" class="btn btn-primary" style="margin-top:5px;width:50%;" value="Pay" name="submit_btn2">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
      </div>
      
      
      

<?php
 
if(isset($_POST['submit_btn2'])){
    $email = $_POST['email'];
    
 $BillNumber=rand();
rand(10,100);
 
    
$query1="Update Workshop SET pstatus='Completed'   WHERE  email= '$email'";
$query2="Update Workshop SET BillNumber='$BillNumber'   WHERE  email= '$email'";
$query_run1=mysqli_query($conn,$query1);
$query_run2=mysqli_query($conn,$query2);



if($query_run1)
{
    if($query_run2){
        
  
    echo'<script>alert("Updated succesfully");</script>';
}
  }
else{
    
    echo'<script>alert("Not Updated succesfully");</script>';

}
}



?>




















<?php
if(isset($_POST['submit_btn']))
{
 $Name =$_POST['Name'];
 $email=$_POST['email'];
 $number=$_POST['number'];
 $course=$_POST['course'];
 $amount=$_POST['tamount'];

 $pstatus=$_POST['pstatus'];
if($_POST['pstatus']=='Completed')
{
 $BillNumber=rand();
rand(10,100);
 
  $query="select * from Workshop WHERE BillNumber=$BillNumber " ;
       $query_run=mysqli_query($conn,$query);
       if(mysqli_num_rows($query_run)>0)
       {
           echo'<script>alert("Duplicate Bill is generating Please Try again!");</script>';
       }

else{
     
  $query="select * from Workshop WHERE email=$email " ;
       $query_run=mysqli_query($conn,$query);
       if(mysqli_num_rows($query_run)>0)
       {
           echo 
          ' <script type=
          "text/javascript"> alert("Data already exits please insert another details")</script>';
          
       }
       else  {
           $query="insert into Workshop values('$Name','$email','$number','$course','$amount','$pstatus','$BillNumber')";
           $query_run=mysqli_query($conn,$query);
       
       if($query_run) {
          
           echo 
          ' <script type=
          "text/javascript"> alert("Detailes are entered Succesfully")</script>'; 
           
       }
       else{
           
           echo 
          ' <script type=
          "text/javascript"> alert(" Error  Check Once Database that is length and type...of variables")</script>';
       }
   }
   
    
 
}       
}
else{
    $BillNumber=0;
  
  
  $query="select * from Workshop WHERE email=$email " ;
       $query_run=mysqli_query($conn,$query);
       if(mysqli_num_rows($query_run)>0)
       {
           echo 
          ' <script type=
          "text/javascript"> alert("Data already exits please insert another details")</script>';
          
       }
       else  {
           $query="insert into Workshop values('$Name','$email','$number','$course','$amount','$pstatus','$BillNumber')";
           $query_run=mysqli_query($conn,$query);
       
       if($query_run) {
          
           echo 
          ' <script type=
          "text/javascript"> alert("Detailes are entered Succesfully")</script>'; 
           
       }
       else{
           
           echo 
          ' <script type=
          "text/javascript"> alert(" Error  Check Once Database that is length and type...of variables")</script>';
       }
   }
   
    
    
}  
} #isset statement block ends here

?>


</section>












<br><br><br>

<footer style="background-color:#50007B;width:100%;color:white;position:relative;bottom:0px;padding:10px">
    
<h6 align="center" >    All Copyrights Are Reserved to WireX Technologies@2019</h6>
</footer>

</body>
</html>