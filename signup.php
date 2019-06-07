<!DOCTYPE html>
<html>
<head>
	<title></title>
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

?>


<?php
$username=$email=$password=$cpassword="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


 if(filter_var(test_input($_POST["email"]), FILTER_VALIDATE_EMAIL))
{
	 if(empty($_POST["email"]))
	 {
	 	$emailErr="please enter email";
	 }
	 else
	 {
	$email=test_input($_POST["email"]);
	echo $email;
}
}
if (preg_match("/^[a-zA-Z ]*$/",test_input($_POST["name"])))
{
	 if(empty($_POST["name"]))
	 {
	 	$emailErr="please enter email";
	 }
else
	 {
	$username=test_input($_POST["name"]);
}

}
    if(!empty($_POST["password"])) {
        $password = test_input($_POST["password"]);
        $secpassword=test_input($_POST["secpassword"]);
       
			{
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        
            elseif(!$password==$secpassword)
            {
            	$passwordErr="password not matched";
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
$result=mysqli_query($conn, $search);
$num=mysqli_num_rows($result);
if($num==1)
{
  echo "username is already taken";
}
else
{
  $sql_insert="INSERT INTO signup(id,name,email,password) VALUES('NULL','$username','$email','$userpassword')";
  {
 if((mysqli_query($conn,$sql_insert)))
 {
  echo "registration sucessfull";
 } 
 else
 {
  echo "error in registration";
 }
}
}



?>




</body>
</html>