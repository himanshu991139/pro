<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrainJam";



$nameErr="";
$emailErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
 else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }






  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  
}

  }
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
  Name<input type="text" name="name">
  <span class="red"><?php echo $nameErr ?>*</span>
  <br><br>
  email<input type="text" name="email">
  <span class="red"><?php echo $emailErr ?>*</span>
  <br><br>
  <input type="submit" value="submit">

</form>

<?php
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (id, email, name)
VALUES ('NULL', '$email', '$name')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
