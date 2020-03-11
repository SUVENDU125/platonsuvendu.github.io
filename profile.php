<?php
$con=mysqli_connect('localhost','root','','btm');
session_start();
include("includes/fun.php");


if(logged_in()){
	header("location:login.php");
}
else if (isset($_COOKIE['suvendu'])) {
	$email=$_COOKIE['suvendu'];
	  $result=mysqli_query($con, "SELECT id,email FROM project WHERE email='$email'");
      $retrive=mysqli_fetch_array($result);
	  $id=$retrive['id'];
	  $email=$retrive['email'];
	  
?>
<!DOCTYPE html>
<html>
<head>
	<title>profile page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
	#body-bg{
		background-image: linear-gradient(90deg,red,pink,yellow,darkgreen,hotpink);
		
	}	
    .container{
   	width: 900px;
   	height: 700px;
   	background-color: darkblue;
   	position: relative;
    margin-left: 25%;
    margin-top: 10%;
    transform: translate(-10%,-10%);
}
 
</style>
</head>
<body id="body-bg">
	<h1 class="text-center">Profile page</h1>
<div class="container" style="	background-image: linear-gradient(45deg,red,pink,yellow,darkblue,darkblue);color: white;  "><br><br>
	<h3 align="center">Welcome <?php echo ucfirst($email)?></h3><br>
   <a href="login.php"> <button class=" btn btn-success " style="float: right;">Logout</button></a>

</div>

</body>
</html>
<?php
}
else{
	
	$email=$_SESSION['id'];
	  $result=mysqli_query($con, "SELECT id,email FROM project WHERE email='$email'");
      $retrive=mysqli_fetch_array($result);
	  $id=$retrive['id'];
	  $email=$retrive['email'];
	  
?>

<!DOCTYPE html>
<html>
<head>
	<title>profile page</title>
	<style type="text/css">
	#body-bg{
		background-image: linear-gradient(90deg,red,pink,yellow,darkgreen,hotpink);
		
		}
		 .container{
   	width: 900px;
   	height: 700px;
   	background-color: darkblue;
   	position: relative;
    margin-left: 25%;
    margin-top: 10%;
    transform: translate(-10%,-10%);
}
</style>
</head>
<body id="body-bg">
	 <h1 class="text-center">Profile page</h1>

	<div class="container" style="	background-image: linear-gradient(45deg,red,pink,yellow,darkblue,darkblue);color: white;  "><br><br>
	<h3 align="center">Welcome <?php echo ucfirst($email)?></h3><br>
   <a href="login.php"> <button class=" btn btn-success " style="float: right;">Logout</button></a>

</body>
</html>
<?php
}

?>