<?php
include_once 'connect.php';
?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
 crossorigin="anonymous">

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
  crossorigin="anonymous"></script>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$admin =array('ali' ,'amr','hassan' ,'sara');
$len= count($admin) ; 
//for($i=0 ; $i < $len; $i++){

if(in_array($fname,$admin)){
  
?>
    <div class="alert alert-secondary" role="alert">
   <?php echo '<center>welcome admin !</center>' ;?></div>
<center>
<div class="card" style="width: 18rem;"  >
  <img src="img/avatar.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $fname ; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button  type="submit" 
class="btn btn-primary btn-lg"> <a href="adm.php" style="color:white">
 </a> <h6>go to admin page !</h6>  </button> 
   <!-- <a href="adm.php" type="submit" method="post" class="btn btn-primary">Go to admin page</a>-->
  </div>
</div>
<form method="post" action="adm.php">
    <button type="submit" name="submit">go to admin page ! </button>
</form>
 
</center>

       
            <?php  
    }else{
?>
<div class="alert alert-warning" role="alert">
 <?php echo '<center>wrong log in you may not be an admin !</center>'; ?>
</div>
        <?php 
    
    }

?>