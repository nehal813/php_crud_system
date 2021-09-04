<?php

 ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
 crossorigin="anonymous">

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
  crossorigin="anonymous"></script>


  <?php
//(fname,lname,email,password)

   
     

       if(isset($_POST['submit'])){
    include_once 'connect.php';
    $fname=$_POST['fname'];
   // $fname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
 if($fname && $lname && $email && $pass){
        


 $table="INSERT INTO users (fname,lname,email,password) VALUES ('$fname','$lname', '$email','$pass') ";

if (mysqli_query($conn, $table)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $table . "<br>" ;
  }

?>
    <div  class='alert alert-info' role='alert'  >
    <?php echo '<center>you have registerd successfully!</center>' ; ?></div>  
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
   <?php  echo '<center>please fill the pasic data !</center> '; ?>
</div>
    <?php
}
}
?>