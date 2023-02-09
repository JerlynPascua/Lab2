
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

	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('$name', '', '$email')";
	
	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}
?>