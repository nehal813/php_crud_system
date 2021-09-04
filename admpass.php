<?php
include 'procces.php';
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <title>Admin Form</title>
<head>
</head>
<body>

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
    <h5 class="card-title"><?php echo $fname. ' '. $lname ; ?></h5>
    <p class="card-text">The admin has many powers. Do you want to use them !</p>
   <!-- <button  type="submit" class="btn btn-primary btn-lg"> <a href="data.php" style="color:white">
 </a> <h6>go to admin page !</h6>  </button> 
   <!-- <a href="adm.php" type="submit" method="post" class="btn btn-primary">Go to admin page</a>-->
  </div>
</div>

<!DOCTYPE html>
<html>
<head>
<style>
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color:#787878  ;
  color: white;
}
</style>
</head>
<body>
<form method="post" action="data.php">
<a href="data.php" target="_blank">open control page !</a><br>
<a href="log.php" target="_blank">log out !</a>
</form>
</body>
</html>

</center>

    <?php  
    }else{
?>
<div class="alert alert-warning" role="alert">
 <?php echo '<center>wrong log in you may not be an admin !</center>'; ?>
    </div>


  <!DOCTYPE html>
<html>
<head>
<style>
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;

}

a:hover, a:active {
  background-color: #787878;
  color: white;
}
</style>
</head>
<body>
<center>
<a href="log.php"  style=" text-decoration: none "; style="color:#787878 ">BACK to log in page !</a>

</center>
</body>
</html>



        <?php 
    
    }

?>
</body>
</html>