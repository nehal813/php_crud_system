<?php

$conn = mysqli_connect('localhost','root','','users');
$fname='';
$lname='';
$email='';
$pass='';

if(mysqli_connect_errno()){
    die("no connection");
}else{
    
//echo "connected ";

}?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
 crossorigin="anonymous">

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
  crossorigin="anonymous"></script>
<?php
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

$sql = "INSERT INTO data (fname, lname, email,password) VALUES ('$fname', '$lname', '$email',$pass)";

if ($conn->query($sql) === TRUE) {
 /* echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/

?><div class='alert alert-info' role='alert'   >
    <?php echo '<center>you have registerd successfully!</center>' ; ?></div>  
    <div class="col-29" > 
        <center>
    <a href="form.php" style="color:black" > <h6 >back to registering page !</h6> </a></center>
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

 if(isset($_GET['delete'])){
    $id=$_GET['delete'];
 $conn = mysqli_connect('localhost','root','','users');
  $del="DELETE FROM data WHERE id=$id ";
  $result = $conn->query($del);
  if ($conn->query($del) === TRUE) {?>
    <div  class='alert alert-info' role='alert'  >
    <?php echo '<center>record deleted successfully!</center>' ; ?></div>  <?php
  } else {
    echo "Error deleting record: " . $conn->error;
  }}

                                     ////////*********//////// 
           /*                          
  if(isset($_GET['edit'])){
    $id=$_GET['edit'];
 //$conn = mysqli_connect('localhost','root','','users');

  $edit="SELECT  *  FROM data WHERE id=$id ";
  $result = $conn->query($edit);
  if ($conn->query($edit) === TRUE) {
      if(count($result)){

    //  if ($result !== false && $result->num_rows > 0){
       // while($row = $result->fetch_assoc()){
       $row = $result->fetch_assoc();
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $pass=$row['pass'];


      }}}
    */
      
      


$conn->close();
  
  
?>