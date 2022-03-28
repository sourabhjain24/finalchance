<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost  
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "studform");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $id =  $_REQUEST['id'];
        $firstname =  $_REQUEST['firstname'];
        $middlename =  $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $course =  $_REQUEST['course'];
        $gender = $_REQUEST['gender'];
        $phone = $_REQUEST['phone'];
          
        // Performing insert query execution
        // here our table name is college
         $sql = "INSERT INTO data VALUES ('$id','$firstname','$lastname','$course','$gender','$phone')";

          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$id\n$firstsname\n$lastname\n "
                . "$course\n$gender\n$phone");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>