<?php  session_start(); ?>
<?php if(!isset($_SESSION['d'])) 
{
header('location:community.php'); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>How-Healthy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="stylesheet/styles.css" />
<script language="javascript" type="text/javascript" src="script/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="script/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="script/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
window.addEvents({
    'domready': function () { /* thumbnails example , div containers */
        new SlideItMoo({
            overallContainer: 'SlideItMoo_outer',
            elementScrolled: 'SlideItMoo_inner',
		thumbsContainer: 'SlideItMoo_items',
            itemsVisible: 5,
            elemsSlide: 2,
            duration: 150,
            itemsSelector: '.SlideItMoo_element',
            itemWidth: 158,
            showControls: 1
        });
    },

});
</script>
<script language="javascript" type="text/javascript">
function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<!-- start of header-->
<div id="site_title_bar_wrapper_outterInnerpage">
  <div id="site_title_bar_wrapper_inner">
    <div id="site_title_barInner">
      <div id="banner_left">
        <div id="site_title">
          <h1><a href="#"><img src="images/logo.png"/> </a></h1>
        </div>
        <div id="menu">
          <ul>
            <li><a href="home.php"><span></span>Home</a></li>
            <li><a href="exercise.php"><span></span>Exercise</a></li>
            <li><a href="nutrition.php"><span></span>Nutrition</a></li>
            <li><a href="community.php" class="current"><span></span>Community</a></li>
             <li><a href="cmnt_sec.php"><span></span>Comment Section</a></li>
            <li><a href="contactus.php"><span></span>Contact Us</a></li>
           
          </ul>
        </div>
        <!-- end of menu -->
      </div>
    </div>
    <!-- end of site_title_bar  -->
  </div>
  <!-- end of site_title_bar_wrapper_inner -->
</div>
<!-- end of site_title_bar_wrapper_outter  -->
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/lightbox.js"></script>
<!-- end of header-->
<div id="contentInner">
  <!-- end of product gallery -->
  <?php
 include"config.php";
  ?>
  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <h2>Welcome
      <?php 
	
	$s=mysql_query('select * from signup where user_id="'.$_SESSION['d'].'"');
     $x=mysql_fetch_array($s);
	  //echo $x['username'] 
	  echo $_SESSION['usr']; ?>
    </h2>
    <div style="width:300px; float:left">
      <ul style="list-style:none; text-decoration:none; font-size:14px; width:150px;">
        <li style="background: none repeat scroll 0 0 #000000; float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><?php echo '<a style="color:#fff" href="editprofile.php">Edit Profile</a>'?></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><?php echo '<a style="color:#fff" href="commenthome.php">Comments</a>'?></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0 ;  border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="recommend.php">Recommendation</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff"  href="signout.php">Sign Out</a></li>
      </ul>
      <div class="cleaner_h10"></div>
    </div>
    <div style="width:450px; float:left">
      <form name="edit" method="post" action="editpage.php" enctype="multipart/form-data" class="userhome">
        <input type="hidden" name="h1" value="<?php echo $x['user_id'];?>" />
        <label class="userim">
        <?php if($x['image']!="") { ?>
        <?php echo '<img style=" height:100px; width:100px;" src="upload/'.$x['image'].'" >'; ?>
        <?php } else {?>
        <img src="images/default_profile_pic.jpg" height="100px" width="100px" title="Username" alt="Username"  />
        <?php } ?>
        <div class="clear"> </div>
        <a href="uploadpicture.php?i=<?php echo $j; ?>" style="font-size:11px">Upload Profile Picture</a>
        </label>
        <table style="padding:10px">
          <tr>
            <td style="width:30%; font-size:13px">Email-Id</td>
            <td style="width:40%"><?php echo $x['emailid'];?>
              <input type="hidden" value="<?php echo $x['emailid'];?>" name="em" /></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><input type="text" name="user" size="22" value="<?php echo $x['username'];?>"  /></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input type="text" name="ad" size="22" value="<?php echo $x['address'];?>"  /></td>
          </tr>
          <tr>
            <td>Contact Number</td>
            <td><input type="text" name="cn" size="22" value="<?php echo $x['contact_number'];?>"  /></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" name="pass" size="22" value="<?php echo $x['password'];?>"  /></td>
          </tr>
          <tr>
            <td>Date Of Birth</td>
            <td><select name="date" >
                <option value="<?php echo $x['day'];?>"><?php echo $x['day'];?></option>
                <?php for($i=31;$i>=1;$i--) { ?>
                <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
                <?php } ?>
              </select>
              <select name="month" >
                <option value="<?php echo $x['month'];?>"><?php echo $x['month'];?></option>
                <?php $a=array("Dec","Nov","Oct","Sep","Aug","July","June","May","Apr","Mar","Feb","Jan"); 
      foreach($a as $r) { ?>
                <option value="<?php echo $r; ?>"><?php echo $r; ?></option>
                <?php } ?>
              </select>
              <select name="year" >
                <option value="<?php echo $x['year'];?>"><?php echo $x['year'];?></option>
                <?php $e=date('Y'); for($j=$e;$j>=date('Y')-63;$j--) { ?>
                <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                <?php } ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>Query Regarding</td>
            <?php $qq=array("Allergy","Blood Pressure","Dental Care","Hair Issues","Joint Pain","Migraine","Obesity","Skin Care"); ?>
            <td><select name="qu">
                <option value="<?php $x['query'];?>"> <?php echo $x['query'];?> </option>
                <?php  foreach($qq as $qi) { ?>
                <option value="<?php echo $qi; ?>"><?php echo $qi; ?></option>
                <?php } ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><input type="text" name="gender" size="22" value="<?php echo $x['gender']; ?>" ></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit"  name="signin" value="Save" class="login_button" style="margin-top:10px"></td>
          </tr>
        </table>
      </form>
      <div class="cleaner_h10"></div>
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
