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
  <script language="javascript" type="text/javascript">
function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script language="JavaScript">
//
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){ 
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you have overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//
</script>
<style type="text/css">
<!--
#sponsorAdDiv {position:absolute; height:1; width:1px; top:0; left:0;}
-->
</style>
<script type="text/javascript">

/******************************************
* DHTML Ad Box (By Matt Gabbert at http://www.nolag.com)
* Visit http://www.dynamicdrive.com/ for full script
* This notice must stay intact for use
******************************************/

adTime=10;  // seconds ad reminder is shown
chanceAd=1; // ad will be shown 1 in X times (put 1 for everytime)

var ns=(document.layers);
var ie=(document.all);
var w3=(document.getElementById && !ie);
var calunit=ns? "" : "px"
adCount=0;
function initAd(){
	if(!ns && !ie && !w3) return;
	if(ie)		adDiv=eval('document.all.sponsorAdDiv.style');
	else if(ns)	adDiv=eval('document.layers["sponsorAdDiv"]');
	else if(w3)	adDiv=eval('document.getElementById("sponsorAdDiv").style');
	randAd=Math.ceil(Math.random()*chanceAd);
        if (ie||w3)
        adDiv.visibility="visible";
        else
        adDiv.visibility ="show";
	if(randAd==1) showAd();
}
function showAd(){
if(adCount<adTime*10){adCount+=1;
	if (ie){documentWidth  =truebody().offsetWidth/2+truebody().scrollLeft-20;
	documentHeight =truebody().offsetHeight/2+truebody().scrollTop-20;}	
	else if (ns){documentWidth=window.innerWidth/2+window.pageXOffset-20;
	documentHeight=window.innerHeight/2+window.pageYOffset-20;} 
	else if (w3){documentWidth=self.innerWidth/2+window.pageXOffset-20;
	documentHeight=self.innerHeight/2+window.pageYOffset-20;} 
	adDiv.left=documentWidth-200+calunit;adDiv.top =documentHeight-200+calunit;
	setTimeout("showAd()",100);}else closeAd();
}
function closeAd(){
if (ie||w3)
adDiv.display="none";
else
adDiv.visibility ="hide";
}

function truebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

onload=initAd;
//End-->
</script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="# "><img src="img/logo.png" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent "
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

  <div id="carouselExampleCaptions" class="carousel slide  .carousel-fade " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions " data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions " data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions " data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/nutrition/a (1).jpg " class="d-block w-100" height="570" alt="... ">
        <div class="carousel-caption d-none d-md-block">
          <h2>Wellcome to healthy</h2>
          <p style="font-size:25px; color:black; "><b>You can't buy good health But you can buy good health information.</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/nutrition/a (2).jpg " class="d-block w-100" height="570" alt="... ">
        <div class="carousel-caption d-none d-md-block">
          <h2>Wellcome to healthy</h2>
          <p style="font-size:25px; color:black; "><b>You can't buy good health But you can buy good health information.</b></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/nutrition/a (3).jpg " class="d-block w-100" height="570" alt="... ">
        <div class="carousel-caption d-none d-md-block">
          <h2>Wellcome to healthy</h2>
          <p style="font-size:25px; color:black; "><b>You can't buy good health But you can buy good health information.</b></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions " data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions " data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div class="container my-5">
<div class="nutrition d-flex">
<div class="whatis" style="width: 50%;">
<p><b>What Is Nutrition? Why Is Nutrition Important?</b></p>
      <p style="font-size:17px;"><b>Nutrition </b>, nourishment, or aliment, is the supply of materials - food - required by organisms and cells to stay alive. In science and human medicine, nutrition is the science or practice of consuming and utilizing foods.</p>
      <p style="font-size:17px;">Nutritional science studies how the body breaks food down (catabolism) and repairs and creates cells and tissue (anabolism) - catabolism and anabolism = metabolism. Nutritional science also examines how the body responds to food. In other words, "nutritional science investigates the metabolic and physiological responses of the body to diet".</p>
      <p style="font-size:17px;">Nutrition also focuses on how diseases, conditions and problems can be prevented or lessened with a healthy diet.</p>
      <p style="font-size:17px;">Nutrition also involves identifying how certain diseases, conditions or problems may be caused by dietary factors, such as poor diet (malnutrition), food allergies, metabolic diseases, etc. </p>
      <p style="font-size:17px;">Food provides the energy and nutrients you need to be healthy. Nutrients include proteins, carbohydrates, fats, vitamins, minerals and water.</p>
      <p style="font-size:17px;">Learning to eat nutritiously is not hard. The key is to</p>
      <nav style="font-size:17px;">
        <p>
        <li>Eat a variety of foods, including vegetables, fruits and whole-grain products</li>
        </p>
        <p>
        <li> Eat lean meats, poultry, fish, beans and low-fat dairy products</li>
        </p>
        <p>
        <li> Drink lots of water</li>
        </p>
        <p>
        <li> Go easy on the salt, sugar, alcohol, saturated fat and trans fat</li>
        </p>
</nav>
      <p><b>The Five Tips That Nutre You :</b></p>
      <p style="font-size:17px;"><b>1) Eat Off a Smaller Plate at Dinner:</b></p>
      <p style="font-size:17px;">You may not have noticed but the size of your dinner plate has morphed over the past century.   
        According to research, the size of the standard dinner plate has increased 22 percent in diameter, from  about 10 inches in 1900 to almost 12 inches in 2010.  Let’s face it: the bigger the plate, the more you will heap on and eat.   Join the Smaller Plate Movement and commit to eating off a plate that is only 9 to 10 inches in diameter at your largest meal of the day.  Do this for a month and you will be shocked as to how effective this one small change can make in shrinking your waist.</p>
      <p style="font-size:17px;"><b>2) Load Up on Waist-Friendly Veggies and Fruit:</b></p>
      <p style="font-size:17px;">According to research, one of the best strategies for losing weight is to make sure that half of your plate is loaded with low calorie, high-volume veggies and fruit to crowd out more calorically-dense foods such as fatty meats and fried foods: <br />
        <img src="gallery/thumb/vegetables.jpg" style="height: 200px; width:300px;"/>
      <p style="font-size:17px;">By adding tons of low calorie veggies such roasted peppers and onions and sliced fruit such as pears and pineapple to your plate, you will reduce the calories but not the sizeor the satisfaction of your meal.   Veggies and fruit fill you up before they fill you out.  If you do this daily, you could be a smaller size by spring.</p>
      <p style="font-size:17px;"><b>3) Go for the Whole Grains:</b></p>
      <p style="font-size:17px;">Researchsuggests that a healthy diet that contains high fiber, nutrient- and phytochemical-rich whole grains can help fight against heart disease, type 2 diabetes, and obesity.  While at least half of your grain servings daily should be whole grains, less than 5 percent of Americans consume this recommended amount.  Choose whole grain cereal and oats in the morning, whole wheat bread at lunch, and quick cook brown rice, whole grain couscous, or whole grain pasta at dinner.  Even though whole grains are healthier for you than refined grains, you need to make sure that only about ¼ of your plate is devoted to grains in order to control calories.</p>
      <p style="font-size:17px;"><b>4) Eat Fish for Longevity:</b></p>
      <p style="font-size:17px;">Want to live longer?  Studies show that consuming 8 ounces of fish weekly, especially omega-3 fatty acid-rich fish such as salmon and sardines, can reduce the risk of heart disease, the number one killer of Americans, slow the accumulation of artery-clogging plague, and even slightly lower high blood pressure.  Consider having at least two 4-ounce fish meals weekly.  Get in the habit of cooking once and eating twice:  Grill a large piece of salmon for dinner and take the leftovers for lunch the next day. </p>
      <p style="font-size:17px;"><b>5) Drink Your Milk</b></p>
      <p style="font-size:17px;">Nonfat and low fat milk and yogurt are not only excellent sources of bone-strengthening calcium and vitamin D but also potassium, which can help prevent high blood pressure. Most Americans are falling short of all three of these nutrients, which can wreak havoc with their bones and blood pressure.   To meet the recommended three servings of dairy daily, add low fat milk to your morning java, add a slice of cheese to your lunchtime sandwich, and reach for a vitamin D fortified nonfat yogurt for a daily snack.  Since full-fat cheese is a major source of heart-unhealthy saturated fat in the American diet, choose only reduced or low fat varieties. </p>
</div>
      <div class="facebook mx-5"> <a href="https://www.facebook.com/pages/How-Healthy/284470868355664?ref=hl"> <img src="gallery/thumb/Facebook.jpg" alt="Like us on facebook" height="50px" width="200px" style="border-radius:6px" /> </a><div class=my-5></div>
      <form name="bmiForm" class="uu border" style="background-color:#e5e5e5 ">
        <!--p>Calculate Your BMI Here</p>-->
        <table style="padding:5px">
          <tr>
            <th colspan="2">Calculate Your BMI Here</th>
          </tr>
          <tr>
            <td style="width:50%; padding-right:5px">Your Weight(kg):</td>
            <td><input type="text" name="weight" size="10"></td>
          </tr>
          <tr>
            <td>Your Height(cm): </td>
            <td><input type="text" name="height" size="10"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="button" value="Calculate BMI" onClick="calculateBmi()" style="border:none; background-color:#990000; color:#FFFFFF ; padding:5px; border-radius:5px; margin:7px 0 7px 0"></td>
          </tr>
          <tr>
            <td> Your BMI: </td>
            <td><input type="text" name="bmi" size="10"></td>
          </tr>
          <tr>
            <td>This Means: </td>
            <td><input type="text" name="meaning" size="25"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="reset" value="Reset" style="border:none; background-color:#990000; color:#FFFFFF ; padding:5px; border-radius:5px; margin-top:7px"/></td>
        </table>
      </form>
      <div class="ad">
        <div id="sponsorAdDiv" style="visibility:hidden">
          <table width="350px" height="250px" style="background-color:#008000 ">
            <tr>
              <td><table width="345px" height="245px" bgcolor="#F0FFF0 ">
                  <tr>
                    <td align="center" valign="middle"><!--*****EDIT THIS MESSAGE*****-->
                      <A HREF="http://www.amazon.com/exec/obidos/redirect-home/wa0c?tag-id=wa0c&placement=home-btn-100x70.gif&site=amazon"> <IMG SRC="http://www.associmg.com/assoc/us/home-btn-100x70.gif?tag-id=wa0c"></A>
                      <p><b>Please take time to show your support<br>
                        for this site by visiting one<br>
                        of our sponsors during this<br>
                        brief intermission.</b> </p>
                      <p><A HREF="http://www.amazon.com/exec/obidos/redirect-home/wa0c?tag-id=wa0c&placement=home-logo-130x60b.gif&site=amazon"> <IMG SRC="http://www.associmg.com/assoc/us/home-logo-130x60b.gif?tag-id=wa0c"></A></p>
                      <p>(This announcement will close shortly) <br>
                        <!--*****EDIT THE ABOVE MESSAGE*****-->
                    </td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </div>
      </div>
      <div class=my-5></div>
      <p><img src="gallery/thumb/boyfruits.jpg" style="height:250px; width:250px;" style="border:3px solid #e5e5e5 ; border-radius:5px"/></p>
</div></div>
</div>
<footer class="container bg-warning">
    <p class="float-end"><a href="# ">Back to top</a></p>
    <p>© 2021–2022 Nitin,<a href="index.php">how-healthy.com</a> Inc. · <a href="# ">Privacy</a> . <a href="# ">Terms</a></p>
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