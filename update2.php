<?php
session_start();
$con = mysqli_connect("localhost","root","","users");


if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    /*
    if(empty($fname) || empty($lname) || empty($email) || empty($pass)) {	
			
		if(empty($fname)) {
			echo "<font color='red'>FirstName field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>lastname field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
    if(empty($pass)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}	
	} else {	*/

    $query = "UPDATE data SET fname='$fname', email='$email', lname='$lname' ,password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
    $sql = "INSERT INTO data (fname, lname, email,password) VALUES ('$fname', '$lname', '$email',$pass)";

     $_SESSION['status'] = "Data Updated Successfully";
     header("Location: update1.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: update1.php");
    }
}

?>