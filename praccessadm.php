<?php
include 'nav.php';
$conn = mysqli_connect('localhost','root','','users');
$fname='';
$lname='';
$email='';
$pass='';

if(mysqli_connect_errno()){
    die("no connection");
}else{
    
//echo "connected ";

}

if(isset($_POST['save'])){
 
 $fname= $_POST['fname'];
$lname= $_POST['lname'];
$email =$_POST['email'];
$pass =$_POST['pass'];

$formerrors=array(); 
  
if(strlen($lname) > 20){
    $formerrors[]=' <div class="alert alert-danger"> too long user name </div> ';
}
if(empty($fname)){

$formerrors[] ='<div class="alert alert-danger" > name cant be empty </div> ';
}if(empty($pass)){

  $formerrors[] ='<div class="alert alert-danger" > password cant be empty </div> ';
}if(empty($lname)){

    $formerrors[]= ' <div class="alert alert-danger"  > lastname cant be empty </div> ';
}if(empty($email)){

    $formerrors[]=' <div class="alert alert-danger" >email cant be empty </div> ';
}
foreach($formerrors as $error){

    echo $error .'</br>';
}
//if there are no errors 

if(empty($formerrors)){

$sql = "INSERT INTO admin (fname, lname, email,password) VALUES ('$fname', '$lname', '$email',$pass)";

if ($conn->query($sql) === TRUE) {
 /* echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/

?><div class='alert alert-info' role='alert'   >
    <?php echo '<center>you have registerd successfully!</center>' ; ?></div>  
    <div class="col-29" > 
        <center>
    <a href="form2.php" style="color:black" > <h6 >back to registering page !</h6> </a></center>
  </div> 
<?php  //header ("location: form.php");
}else{
    ?>
    <div class="alert alert-danger" role="alert">
   <?php  echo '<center>please fill the pasic data !</center> '; ?>
</div>
    <?php
}}
}
