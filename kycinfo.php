
 
<?php
$con=mysqli_connect('localhost''root''')

mysqli_db_select()

$email=$_POST['em1'];
$pass=$_POST['p1'];
$cpass=$_POST['cp1'];

$query="insert into table(email,pass,cpass)values('$email','$pass','$cpass')";

echo"query"
mysqli_query($con,$query);
header('location:index.html');

?>
 