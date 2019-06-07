<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
</style>
</head>
<body>
<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="BrainJam";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
  echo "connection failed";

}
else
{
  echo "connection established";
}

$email=$userpassword="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




   if(empty($_POST["email"]))
   {
    $emailErr="please enter email";
   }
   else
   {
  $email=test_input($_POST["email"]);
  echo $email;
}


    if(!empty($_POST["password"])) {
        $password = test_input($_POST["password"]);
       
       
      {
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        
        
         else
            {
            $userpassword=$password;
            echo $userpassword;
          
            }
}
}


?>


<?php

$search="SELECT * FROM  signup where email='$email' && password='$userpassword'";
$result=(mysqli_query($conn,$search));
$num=mysqli_num_rows($search);
if($num==1)
{ echo "done";
  $_SESSION['username']=$username;
  header('location:home.php');
}
else
{
   header('location:index.html');
}
?>
</body>
</html>