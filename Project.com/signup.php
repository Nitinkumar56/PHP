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
  <style>
    .p11:hover{
      background-color:rgb(255, 0, 0);
      font-size:30px;
      font-family:bookman;
    }
    .p11{
      font-size:29px;
      font-family:palatino;
      
      width: 150px;
    }
  </style>
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
          <h2>Wellcome to iCoder</h2>
          <p>Technology News, Development and Treads</p>
          <button class="btn btn-danger">Technology</button>
          <button class="btn btn-warning">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/about/a (2).jpg" class="d-block w-100" height="570" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>The Best Coding Blog</h2>
          <p>Technology News, Development and Treads</p>
          <button class="btn btn-danger">Technology</button>
          <button class="btn btn-warning">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
        </div>
      <div class="carousel-item">
        <img src="img/about/a (3).jpg" class="d-block w-100" height="570" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Award winning Blog</h2>
          <p>Technology News, Development and Treads</p>
          <button class="btn btn-danger">Technology</button>
          <button class="btn btn-warning">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/about/a (4).jpg" class="d-block w-100" height="570" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Award winning Blog</h2>
          <p>Technology News, Development and Treads</p>
          <button class="btn btn-danger">Technology</button>
          <button class="btn btn-warning">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
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
  <div class="section_w940">
    <center>
      <div style="width:430px;">
        <h2>Sign Up </h2>
        <center>
          <form name="signup" method="post" action="signupdb.php">
            <center>
              <table class="signup">
                <tr>
                  <td>Firstname</td>
                  <td><input type="text" name="fn" placeholder="Firstname" size="23" onkeyup="f2();" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="fn_error" style="display:none; color:#DD0000" >Enter Firstname</span></td>
                </tr>
                <tr>
                  <td>Lastname</td>
                  <td><input type="text" name="ln" placeholder="Lastname" size="23" onkeyup="f2();" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="ln_error" style="display:none; color:#DD0000" >Enter Lastname</span></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td><input type="text" name="user" placeholder="Username" size="23"  onkeyup="f2();"  /></td>
                  </span>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="user_error" style="display:none; color:#DD0000" >Enter Username</span></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td><textarea name="ad" rows="2" cols="18" size="23" onkeyup="f2();" ></textarea></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="address_error" style="display:none; color:#DD0000;">Enter Address</span></td>
                </tr>
                <tr>
                  <td>Contact Number</td>
                  <td><input type="text" name="cn" placeholder="Contact-Number" size="23" onkeyup="f2();" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="contact_error" style="display:none; color:#DD0000" >Enter Contact Number</span></td>
                </tr>
                <tr>
                  <td>Email-Id</td>
                  <td><input type="text" name="em" placeholder="Email-Id" size="23" id="email3"  onkeyup="f2();"  /></td>
                </tr>
                <td><span>
                    <?php if(@$_GET['mes']==1) { echo 'EmailId Already Exist'; } ?>
                    </span>
                <tr>
                  <td colspan="2" align="center"><span id="email_error" style="display:none; color:#DD0000" >Enter Your Email-Id </span></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password" name="pass" placeholder="Password" size="23" onclick="email1();" onkeyup="f2();"  /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="pass_error" style="display:none; color:#DD0000" >Enter Your Password</span></td>
                </tr>
                <tr>
                  <td>Confirm Password</td>
                  <td><input type="password" name="cp" size="23" placeholder="Confirm-Password" onkeyup="f2();" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="cp_error" style="display:none; color:#DD0000" >Enter Confirm Password</span></td>
                </tr>
                <tr>
                  <td>Date Of Birth</td>
                  <td><select name="date"  onfocus="f3();">
                      <option value="">-----</option>
                      <?php for($i=31;$i>=1;$i--) { ?>
                      <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
                      <?php } ?>
                    </select>
                    <select name="month" onfocus="f3();">
                      <option value="">-----</option>
                      <?php $a=array("Dec","Nov","Oct","Sep","Aug","July","June","May","Apr","Mar","Feb","Jan"); 
      foreach($a as $r) { ?>
                      <option value="<?php echo $r; ?>"><?php echo $r; ?></option>
                      <?php } ?>
                    </select>
                    <select name="year" onfocus="f3();">
                      <option value="">-----</option>
                      <?php $e=date('Y'); for($j=$e;$j>=date('Y')-63;$j--) { ?>
                      <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                      <?php } ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="date_error" style="display:none; color:#DD0000" >Fill The Empty Place </span></td>
                </tr>
                <tr>
                  <td>Query Regarding</td>
                  <td><select name="query" onfocus="f6();">
                      <option value="">---------</option>
                      <option value="Allergy">Allergy</option>
                      <option value="Blood Pressure">Blood Pressure</option>
                      <option value="Dental Care">Dental Care</option>
                      <option value="Hair Issues">Hair Issues</option>
                      <option value="Joint Pain">Joint Pain</option>
                      <option value="Migraine">Migraine</option>
                      <option value="Obesity">Obesity</option>
                      <option value="Skin Care">Skin Care</option>
                    </select></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="query_error" style="display:none; color:#DD0000" >Fill The Empty Place </span></td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td><input type="radio" name="gender" value="male" onfocus="f4();">
                    Male
                    <input type="radio" name="gender" value="female" onfocus="f4();">
                    Female</td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="g_error" style="display:none; color:#DD0000" >Please Select Gender</span></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><input type="submit" name="signin" value="Sign Up" class="login_button" onclick="return f1();" ></td>
                </tr>
              </table>
            </center>
          </form>
        </center>
        <div class="cleaner_h10"></div>
      </div>
    </center>
    <div class="cleaner"></div>
  </div>
</div></div>
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

