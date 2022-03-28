<?php
// database connection code
if(isset($_POST['studform']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtName = $_POST['id'];
$txtEmail = $_POST['firstname'];
$txtPhone = $_POST['middlename'];
$txtMessage = $_POST['lastname'];
$txtName = $_POST['course'];
$txtName = $_POST['gender'];
$txtName = $_POST['phone'];


// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`id`, `fistname`, `middlename`, `lastname`, `course`,`gender`, `phone`) VALUES ('0', 'sourabh', 'jain', 'rajkumar', 'BCA','male', '8391705',)";

// insert in database 
$rs = mysqli_query($connect, $studform);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>