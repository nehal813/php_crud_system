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
<form class="row g-2" action ="admin.php" method="post" style="padding:15px" >

<div class="col-md-5">
<label  class="form-label">First Name</label>
<input type="text"  class="form-control" name="fname">
<!--<div  class="form-text">-->
</div>
<div class="col-md-5">
<label  class="form-label">Last Name</label>
<input type="text"  class="form-control" name="lname">
<!--<div  class="form-text">-->
</div>

  <div class="col-md-5">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" autocomplete="off" >
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="pass" autocomplete="off" >
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


  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="form-group" style="padding:9px" >
  <div class="col-sm-offset-2 col-sm-10 " >
      <button  type="submit" class="btn btn-primary btn-lg">Log in</button>
  </div>
</div>
  <div class="col-29" > 
    <a href="form.php"> <h6>back to privious page !</h6> </a>
  </div>  
  </center>
</form>

</body>
</html>