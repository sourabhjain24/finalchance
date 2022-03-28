<?php
  
$servername = "localhost8080";
$username = "username";
$password = "password";
$dbname = "studform";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
  
$sqlquery = "INSERT INTO data VALUES 
    ('John', 'Doe', 'joj')"
  
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   
?>



<?php
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // collect value of input field
    $data = $_REQUEST['val1'];
  
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}
?>
  
// Closing the connection.
$conn->close();
  
?>