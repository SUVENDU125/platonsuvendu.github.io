

<!DOCTYPE html>
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
<body style="background-color: #0abde3">


 

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="LETS FINISH THE KYC" class="avatar">
  </div>

  <div class="container">
    
     <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="email" required>

   <form action="/action_page.php">
  <p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>


    <label for="psw-repeat"><b>Age : </label>
    <input type="date" placeholder="Repeat Password" name="psw-repeat" required><br>

    <label for="psw-repeat">Work experience </label> <br><br>
     <textarea cols="100" rows="10"></textarea>
    
    <center><a href="kycselhi.php">Next</a></center>



  
</form>

</body>
</html>
 