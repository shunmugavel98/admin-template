<?php 
 
require_once 'db.php';
 
if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
	 $gender = $_POST['gender'];
 
    $sql = "INSERT INTO customers (fname, lname, contact, age, gender, active) VALUES ('$fname', '$lname', '$contact', '$age', '$gender', 1)";
    if($con->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<script>window.location = 'index3.php';</script>";
		//echo "<a href='../create.php'><button type='button'>Back</button></a>";
        //echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $con->con_error;
    }
 
    $con->close();
}
 
?>