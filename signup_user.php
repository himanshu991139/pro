<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
header("location:in.html");
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

<!--------------------------------------------------------------------------------------------------------------------------------->

<?php
$username=$email="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


 if(filter_var(test_input($_POST["email"]), FILTER_VALIDATE_EMAIL))
{
	$email=test_input($_POST["email"]);

}
if (preg_match("/^[a-zA-Z ]*$/",test_input($_POST["name"])))
{
	$username=test_input($_POST["name"]);

}



?>





<?php
$sql_insert="INSERT INTO signup(id,name,email) VALUES('NULL','$username','$email')";
if(mysqli_query($conn,$sql_insert))
{
	echo "query is executed";
}
else
{
	echo "query is not executed";
}





?>
</body>
</html>