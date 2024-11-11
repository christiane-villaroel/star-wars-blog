<!DOCTYPE html>
<html>
<body>
 
<?php
$servername = "localhost";
$username = "root";
$password = "BHJoV3XA48B#";
$dbname = "blog";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ($conn) {
    echo "Database created successfully";
  }
/* $sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
} */

/* $sqlQuery = '
insert into users(username,email,password)
values("Luke Skywalker", "skywalker@gmail.com","1234")';

if(mysqli_query($conn,$sqlQuery)){
    echo "New record created yay!";
}else {
    echo "Error " .$ql . "<br/>" . mysqli_error($conn);
} */

$sqlQuery = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sqlQuery)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);



?>


</body>
</html>
