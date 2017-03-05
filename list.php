<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$name = $_GET['name'];
$nam = explode(" ", $name );


$conn = mysqli('ec2-23-23-212-121.compute-1.amazonaws.com', 'qtprhuwxvixkjx', 'bb47d3bee591cb4fbaff7f69ebec8ee47cbafca92d30e12f63d66c2b93f86cd3', 'd5uqbv3bfs34m3');

if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM details WHERE first_name  = $nam[0] AND last_name = $nam[1]";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>DOB</th>
<th>Age</th>
<th>Phone Number</th>
<th>Add Info</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
	echo "<td>" . $row['phonenumber'] . "</td>";
	echo "<td>" . $row['addinfo'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>

