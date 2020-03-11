

















<!DOCTYPE html>
<html>
<head>
  <title></title>
  <title>texxt</title>
  <script type="text/javascript" src="test2.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <style type="text/css">
    button{
      width: 200px;
      margin: 10px;
    }
    .fon{
      border-radius: 5px;
      background-color: darkred;
    }

  </style>
</head>
<body style="background-color:#0abde3">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
      <a href="" class="navbar-brand mr-10px"><img src="images/img4.jpg" style="width: 55px;height: 30px"></a>
        <h4 class="text-white" style="margin-left: 10px;">Platon</h4>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar ml-auto">
            <li class=" nav-item"><a href="login.php" class="btn btn-outline-warning">Login</a></li>
             <li class=" nav-item"><a href="signup.php" class="btn btn-outline-warning ml-3">Sign up</a></li>
          </ul>
        </div>
      </div>
    </nav>
     <div class="container">
      <div class="col-lg-4 col-md-4 ml-400px">
        <div class="jumbotron" style="margin-top: 30px;padding: 25px; box-shadow: 3px 1px 8px 2px black">
          <h4 align="center"> Sign in</h4>
           <form onclick="return myfun()" action="test2info.php" method="post">
            
            <div class="form-group">
              <label>Name :</label>
              <input type="text" name="name1" id="name2" class="form-control" placeholder="enter name" onkeyup="myfun()">
            </div>
             
            <div class="form-group">
              <label>password :</label>
              <input type="password" name="pass1" id="pass2" class="form-control" placeholder="enter password" onkeyup="myfun()">
            </div>
            <div class="form-group">
              <label>Repeat password :</label>
              <input type="password" name="cpass1" id="cpass2" class="form-control" placeholder="re-enter" onkeyup="myfun()">
            </div><br>
           <input type="checkbox" required="" name="remember" style="margin-bottom:15px"> Please agree our terms & condition
           </label>
            <center><button type="submit" class="btn btn-success">Login</button></center>
          </form>
        </div>
      </div>
    </div>

    <center><a href="welcome.php" class="fon" style="color: white; font-size: 20px; ">click here to go home page</a></center><br><br>

</body>
</html>
























<!-- <!DOCTYPE html>
<html>
<style>
 
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
input[type=text], input[type=password] {
  width: 500px;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
margin:10px;
width:400px;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
 
<form action="info.php" onclick="return false fun()" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
      
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="em1" id="em2"required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="p1" id="p2" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password"name="cp1" id="cp2" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Please agree our terms & condition
    </label>
    
     
    <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="login.php">Login</a></button> 
      <button type="submit" class="signupbtn" style="margin-left:50px;">Sign Up</button>
    </div>
  </div>
</form>


 
</body>
</html>







 

<br>
<br>
 -->



 