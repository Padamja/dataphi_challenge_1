<?php

extract($_POST);
$conn = new mysqli('ec2-23-23-212-121.compute-1.amazonaws.com', 'qtprhuwxvixkjx', 'bb47d3bee591cb4fbaff7f69ebec8ee47cbafca92d30e12f63d66c2b93f86cd3', 'd5uqbv3bfs34m3');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

	} 
else
	
echo "successful";

$sql = "INSERT INTO  details(first_name,last_name ,gender, dob, age, phone,add_info  ) VALUES ($firstname,$lastname,$gender,$dob,$age,$phonenumber)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>