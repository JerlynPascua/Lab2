<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');

if (!empty($name)){
  if (!empty($email)){
    if (!empty($message)){


      $host = "localhost";
      $dbusername = "webprogmi211";
      $dbpassword = "webprogmi211";
      $dbname = "webprogmi211";
      // Create connection
      $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO jppascua_myguests (name, email, message)
values ('$name','$email','$message')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}


?>