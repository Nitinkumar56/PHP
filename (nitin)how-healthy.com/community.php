<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="family.css">
</head>
<body>
    <?php include"header.php" ?>
    <div class="joincomunity" style="margin-left:100px; margin-right:100px;">
    <center>
      <h2 style="border:3px solid #e5e5e5; border-radius:5px; padding:5px">Join Our Community</h2>
    </center>
</div>
<div class="allergy">
  <div style="margin-left:100px;">
      <h2>Health Issues</h2>
    
        <div><img src="gallery/thumb/allergycare.png" style="height: 100px; width:300px;"></a>
          <p><b>Allergy</b></p>
          <p>Allergy is a hypersensitive reaction of the immune system produced by several origins such as environmental factors, drugs, foods....<a href="allergy.php">Read More</a></p>
        </div>
        <div><img src="gallery/thumb/bloodpressure.jpg" style="height: 200px; width:200px;"></a>
          <p><b>Blood Pressure</b></p>
          <p>High blood pressure is a critical concern as it significantly raises the incidence of vascular disease and stroke....<a href="bloodpressure.php">Read More</a></p>
        </div>
        <div><img src="gallery/thumb/dentalcare.jpg" style="height: 200px; width:200px;"></a>
          <p><b>Dental Care</b></p>
          <p>Proper oral health care must be encouraged in children.As a parent, you must teach them how to properly brush and floss their teeth to help keep their teeth and gums healthy for years to come....<a href="dentalcare.php">Read More</a></p>
        </div>
        <div><img src="gallery/thumb/hair.jpg" style="height: 200px; width:200px;"></a>
          <p><b>Hair Issues</b></p>
          <p>Your hair is a reflection of your internal health. Taking proper care of your hair can completely redefine your beauty.To know about....<a href="haircare.php">Read More</a></p>
        </div>
        <div><img src="gallery/thumb/jointpain.jpg" style="height: 200px; width:200px;"></a>
          <p><b>Join Pain</b></p>
          <p>Joint pain is uncomfortable and frustrating, especially for those who are used to living an active life. For relief from the pain, many reach for remedies like the prescription drugs.To know about...<a href="jointpain.php">Read More</a></p>
        </div>
        <div><img src="gallery/thumb/migrane.jpg" style="height: 200px; width:200px;"></a>
          <p><b>Migrane</b></p>
          <p>Migraine attacks can cause significant pain for hours to days and be so severe that all you can think about is finding a dark, quiet place to lie down.To know about...<a href="migrane.php">Read More</a></p>
        </div>
        <div><img src="gallery/thumb/obesity.jpg" style="height: 200px; width:200px;"></a>
          <p><b>Obesity</b></p>
          <p>Overweight and obesity continue to plague a majority of men, women and children alike, placing them at considerable risk for heart disease, diabetes and fatty liver disease.To know about....<a href="obesity.php">Read More</a> </p>
        </div>
        <div><img src="gallery/thumb/skincare.jpg" style="height: 200px; width:200px;"></a>
          <p><b>Skin Care</b></p>
          <p>Your skin is the largest organ in your body and deserves to receive as much attention as brushing your teeth twice a day.To know about....<a href="skinissues.php">Read More</a></p>
        </div>
  </div>

      <div class="login" style="margin-right:100px;">
        <h2>Log In</h2>
      <form name="login" method="post" action="communitydb.php">
        <table class="login">
          <tr>
            <td>Email-Id</td>
            <td><input type="text" name="em" id="t1" placeholder="Email-Id"  onkeyup="valid1();"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center"></td>
          </tr>
          <tr>
            <td>Password</font></td>
            <td><input type="password" name="pass" id="t2" placeholder="Password"   onkeyup="valid1();"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" value="LogIn"  class="login_button" onclick="return valid();" /></td>
            </td>
          </tr>
          <tr>
            <td align="left" style="font-size:12px"><a href="signup.php"><font color="#FF0000">Sign Up</font></a></td>
            <td align="right"  style="font-size:12px"><a href="frgtpswrd.php"><font color="#FF0000">Forget Password</font></a></td>
          </tr>
        </table>
      </form></div></div>
    <?php include"footer.php" ?>
</body>
</html>