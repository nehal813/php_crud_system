<?php
 $conn = mysqli_connect('localhost','root','','users');


 $fname='';
 $lname='';
 $email='';
 $pass='';

 if(isset($_POST['edit'])){
    //$id=$_GET['edit'];

  $edit="SELECT  fname, lname,email, password   FROM data WHERE id=$id ";
  $result = $conn->query($edit);
  //if ($conn->query($edit) === TRUE) {

     // if ($result !== false && $result->num_rows > 0){
       /* while($row = $result->fetch_assoc()){
       // $row = $result->fetch_assoc();
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $pass=$row['pass'];*/
      //  echo "id: " . $row["id"]. " - Name: " . $row["fname"] . " " . $row["password"]. "<br>";

   
        //echo "Error deleting record: " . $conn->error;

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
          <a href="form.php?edit=<?php echo $row['id']; ?>"
          class="btn btn-info">Edit</a>
          <a href="form.php?delete=<?php echo $row['id']; ?>"
          class="btn btn-danger">Delete</a>
    </td>
          


      </tr><?php endwhile; ?>
     
    </tbody>
  
  </table>
  </div>
  </div>

<form class="row g-2" action ="procces.php" method="post"  style="padding:15px" >

<div class="col-md-5">
<label  class="form-label">First Name</label>
<input type="text"  class="form-control" name="fname" value="<?php echo $row['fname']; ?>"   >
<!--<div  class="form-text"> class="col-29" -->
</div>
<div class="col-md-5">
<label  class="form-label">Last Name</label>
<input type="text"  class="form-control" name="lname" autocomplete="off" value="<?php //$_REQUEST['lname']; ?>"   >
<!--<div  class="form-text">-->
</div>

  <div class="col-md-5">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control"
      autocomplete="off" value="<?php //$row['email']; ?>"   required="required" >
  </div>
  <div class="col-md-5">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" autocomplete="off"  value="<?php //$pass; ?>"  name="pass">
  </div>
        <?php
      }
    ?>