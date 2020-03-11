
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="test.js"></script>
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
<body style="background-color: #0abde3">

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
    <div class="col-md-4 col-lg-4">
      <div class="jumbotron" style="margin-left: 50px;margin-top: 50px;box-shadow: 1px 0px 5px 1 skyblue;border-radius: 10px;">
        <h4 class="text-center">Login page</h4>
      <form onclick="return myfun()" action="test2info.php" method="post">
        <div class="form-group">
          <label>Enter mail id</label>
          <input type="text" name="name1" id="email3" class="form-control" placeholder="enter your id">
        </div>
        <div class="form-group">
          <label>Enter password</label>
          <input type="text" name="name1" id="pass3" class="form-control" placeholder="enter password">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>

<center><a href="welcome.php" style="color: white;" class="fon">click here to go home page</a></center>

</body>
</html>











<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="LOGIN PAGE" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="nm1" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>



</body>
</html> -->
