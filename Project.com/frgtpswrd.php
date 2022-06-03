<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>how-healthy.com</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo.png" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" align="center">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item p11 rounded-pill mx-2">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item p11 rounded-pill mx-2">
            <a class="nav-link active" href="about.php">about</a>
          </li>
          <li class="nav-item p11 rounded-pill mx-2">
            <a class="nav-link active" href="contactus.php">Contact us</a>
          </li>

        </ul>
      </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide  .carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/about/a (1).jpg" class="d-block w-100" height="570" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Wellcome to healthy</h2>
          <p class="pa" style="font-size:25px; color:black; "><b>You can't buy good health But you can buy good health information.</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/about/a (2).jpg" class="d-block w-100" height="570" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Wellcome to healthy</h2>
          <p class="pa" style="font-size:25px; color:black; "><b>You can't buy good health But you can buy good health information.</b></p>
        </div>
        </div>
      <div class="carousel-item">
        <img src="img/about/a (3).jpg" class="d-block w-100" height="570" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Wellcome to healthy</h2>
          <p class="pa" style="font-size:25px; color:black; "><b>You can't buy good health But you can buy good health information.</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/about/a (4).jpg" class="d-block w-100" height="570" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Wellcome to healthy</h2>
          <p class="pa" style="font-size:25px; color:black; "><b>You can't buy good health But you can buy good health information.</b></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container my-5">
<div id="contentInner">
<div class="section_w940 d-flex">
<?php $iii=@$_GET['wrg'];?>
<div style="width:33%; border:3px solid #e5e5e5; border-radius:5px">
<h2>Tips Of Healthy Eating</h2>


 <p><b>1.Eat a balanced diet</b></p> 
 <p><b>2.Drink more water</b></p>
  <p><b>3.Don’t skip breakfast</b></p>
  <p><b>4.Eat less salt</b></p>
  <p><b>5.Keep junk out of your body</b></p>
  <p><b>6.Eat slowly</b></p>
 <p><b>7.Take time out to relax</b></p>
 <p><b>8.Cut down on smoking and drinking</b></p>
 <p><b>9.Cut down on saturated fat and sugar</b> </p>
 <p><b>10.Eat lots of fruit and vegetables</b> </p>
 </div>
 
 
 
 <div style="width:33%; margin:50px 0 0 50px;">
<form name="forgot" method="post" action="fp.php">
<table>
<tr><td>Your Email-Id</td>
<td><input type="text" name="email" placeholder="Insert Email_Id" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="s" value="Submit" style="border:none; padding:5px; color:#FFFFFF; background-color:#990000"  /></td></tr>
</table>
</form>
</div>
 
 
 
 
<div style="width:33%; border:3px solid #e5e5e5; border-radius:5px">
 <label style="width:100px; height:230px">
 <img src="photo/for.jpg" height="220px" width="200px"  />
 </label>
 <h2>5 health benefits of eating apples</h2>
 
 <p><b>1. Get whiter, healthier teeth</b></p>
  <p><b>2. Decrease your risk of diabetes</b></p>
   <p><b>3. Reduce cholesterol</b></p>
    <p><b>4. Get a healthier heart</b></p>
	 <p><b>5. Control your weight</b></p>
  </div> 
 
 <div class="cleaner_h10"></div>
    </div>
  
    <div class="cleaner"></div>
  </div>
</div>
  </div>
<!-- end of content -->
<footer class="container bg-warning">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2021–2022 Nitin,<a href="index.php">how-healthy.com</a> Inc. · <a href="#">Privacy</a> . <a href="#">Terms</a></p>
  </footer>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>

     
     
     