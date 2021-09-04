<!DOCTYPE >
<html>
<head>
<title></title>
<meta charset="UTF-8 BOM">
<link rel="stylesheet" href="">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
 crossorigin="anonymous">

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
  crossorigin="anonymous"></script>
<head>
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
<form class="row g-2" action ="regis.php" method="post"  style="padding:15px" >

<div class="col-md-5">
<label  class="form-label">First Name</label>
<input type="text"  class="form-control" name="fname">
<!--<div  class="form-text"> class="col-29" -->
</div>
<div class="col-md-5">
<label  class="form-label">Last Name</label>
<input type="text"  class="form-control" name="lname" autocomplete="off" >
<!--<div  class="form-text">-->
</div>

  <div class="col-md-5">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control"  autocomplete="off"  required="required" >
  </div>
  <div class="col-md-5">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" autocomplete="off" name="pass">
  </div>
  <div class="col-10">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-10">
    <label  class="form-label">phone number</label>
    <input type="number" class="form-control" >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4" >
    <label for="inputState" class="form-label">Residence</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  
  
  <label ><h5>Gender</h5></label><br>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" >
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
  </div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault"  >
  <label class="form-check-label" for="flexRadioDefault2">
    Female
</div>



<label for="floatingTextarea2" style="padding-top:11px" ><h6>Add a comment if you like</h6> </label>
<div  class="col-md-10" >
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" 
  style="height: 100px  " ></textarea>
  
</div>
  <div class="row-32">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <center>
 
  <div class="form-group" style="padding:11px" >
  <div class="col-sm-offset-2 col-sm-10 " >
      <button  type="submit" name="submit" class="btn btn-primary btn-lg">register</button>
  </div>
</div>
  <div class="col-29" > 
    <a href="log.php"> <h6>log in as an admin !</h6> </a>
  </div>  
  </center>
</form>

</body>
</html>