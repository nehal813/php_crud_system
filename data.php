<?php
error_reporting(0);
  include 'procces.php'; 
  session_start();
//include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <title>DATA</title>
<head>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
 crossorigin="anonymous">

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
  crossorigin="anonymous"></script>
<style> 
@font-face {
   font-family: myFirstFont;
   src: url(sansation_light.woff);
}

* {
   font-family: myFirstFont;
}
</style>
</head>
<body>
 
  <?php $conn = mysqli_connect('localhost','root','','users');
 /* if(isset($_GET['delete'])){
    $id=$_GET['delete'];
 $conn = mysqli_connect('localhost','root','','users');
  $del="DELETE FROM data WHERE id=$id ";
  $result = $conn->query($del);
  if ($conn->query($del) === TRUE) {?>
    <div  class='alert alert-info' role='alert'  >
    <?php echo '<center>record deleted successfully!</center>' ; ?></div>  <?php
  } else {
    echo "Error deleting record: " . $conn->error;
  }}*/

  $sql = "SELECT * FROM data";
  $result = $conn->query($sql);
  
  if ($result !== false && $result->num_rows > 0){
    // output data of each row
?>

    <div style="padding:55px" style="padding-bottom:11px">
  <table class="table table-success table-striped"  >
   
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">password</th>
        <th scope="col">Action</th>
      </tr>
    </thead>   <?php while($row = $result->fetch_assoc()) :   ?>

    <tbody>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row["fname"]. ' '. $row['lname'] ; ?> </td>
        <td> <?php echo $row["email"]; ?>   </td>
        <td> <?php echo $row["password"]; ?>   </td>
        <td>

   
        
         <a href="update1.php" class="btn btn-info">Edit</a>
         <?php// echo $row['id']; ?>
          <a href="data.php?delete=<?php echo $row['id']; ?>"   class="btn btn-danger">Delete</a>
    </td>
          


      </tr><?php endwhile; ?>
     
    </tbody>
  
  </table>
  </div>

      <?php 
      //  echo "id: " . $row["id"]. " - Name: " . $row["fname"] . " " . $row["password"]. "<br>";
  } else {
    echo "0 results";
  }
  $conn->close();
?>
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
<a href="form.php"  >Log out</a>
<a href="log.php"  >Back to log in page</a></center>
</body>
</html>