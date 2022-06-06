<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Permanent+Marker');
body {
    margin:0;
    padding:0;
    display:flex;
    justify-content:center;
    min-height:100vh;
    
    background:#000;
    font-family:Charm;
 
}
.container{
    position:relative;
    width:300px;
    margin-top:20%;
    height:430px;
    border-radius:40px ;
    min-height:100px;
    background:rgba(255,255,255,0.05);
    box-shadow:0 0 15px rgba(0,0,0,1);
}
.container:before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:50%;
    height:100%;
    background:rgba(255,255,255,0.1);
  
}
.container:after{
    content:'';
    position:absolute;
    top:-5px;
    left:-5px;
    right:-5px;
    bottom:-5px;
        pointer-events:none;
    background-image:linear-gradient(-45deg,#ff0047,#6eff00); 
   animation:flow 7s  linear infinite; 
    
}
.form{
    position:absolute;
    width:100%;
    height:100%;
    padding:40px;
    box-sizing:border-box;
    z-index:1;
}
.form h2{
    margin:0;
    font-family:Permanent Marker;
    padding:0;
    color:Powderblue;
    font-size:24px;
}
.form .page {
    width:100%;
    margin-top:30px;
}
.form .page input{
    width:100%;
    background:transparent;
    border:none;
    text-transform:capitalize ;
    border-bottom:2px solid  #fff;
    outline:none;
    font-size:18px;
    color:#fff;
    padding:5px 0;
    font-family:consolas;
}
::placeholder{
    color:#eee;
}
.form .page input[type="submit"]
{
 
   color:#fff;
   border:none;
   border-radius:30px;
   font-weight:300;
   margin-left:22%;
   max-width:100px;
   cursor : pointer;
   font-size:20px;
   background:linear-gradient(90deg,#3603ff,#a41ee9);
   transition: .5s;
   text-decoration:none;
   text-shadow: 0 3px 2px rgba(0,0,0,.1);
   overflow:hidden;
   box-shadow: 0 0 0 5px rgba(0,0,0,.1);
 
}
a:before{
    content:'';
    position:absolute;
    background:linear-gradient(-90deg,transparent,pink,transparent);
    transition: .5s;
    text-shadow:0 0 0 5px rgba(0,0,0,.2);
}
a:hover:before{
    transform:translate(-30%,-30%) perspective(500px) rotate(-15deg);
    filter:blur(30px);
}
.form p{
    color: #eee;
    left:20%;
}
@keyframes flow{
    0%{
        filter:blur(30px) hue-rotate(0deg);
    }
    100%{
        filter:blur(30px) hue-rotate(360deg);
    }
}
.form p a{
    color:#fff;
    font-size:17px;
    }
.social{
    position: relative;
    margin-top: 15px;
    text-align: center;
    transition: all 1s ease;
    
}
.social span{
    font-size: 30px;
    color:#66ffee;
    transition: all 1s ease-in-out;
}
.social span:nth-child(2){
    margin-left: 15px;
    margin-right: 15px;
    transition: all 1s ease;
}
.social:hover::before{
    transform:translate(-30%,-30%);
    color:#ff0047;
    }
    .social:hover::after{
background:linear-gradient(-90deg,transparent,#ff0,transparent);
}
p{
    margin:15%;
    
}
.theme-switch-wrapper {
 display: flex;
  align-items: center; 
margin-left:70%; 
margin-top:3%;
}
 .theme-switch { 
 display: inline-block;
  height: 34px; 
  position: relative; 
  width: 60px; } 
  .theme-switch input { 
  display:none;
   }
   .move { 
   background-color:#0f0; 
   bottom: 0; 
   cursor: pointer; 
   left: 0; 
   position: absolute;
    right: 0;
     top: 0; 
     transition: .4s; 
     } 
     .move:before { 
     background-color:#000; 
     bottom: 4px;
      content: ""; 
      height: 26px;
       left: 4px;
        position:  absolute; 
        transition: .4s; 
        width: 26px;
         } */
        input:checked + .move {
          background-color: #ff6699; 
          } input:checked + .move:before 
          { 
          transform: translateX(26px);
           }
            .move.round:before { border-radius: 50%;
             }
    </style>
    </head>
    <body>
    <div class="container">
     <div class="theme-switch-wrapper"> 
<label class="theme-switch" for="checkbox"> <input type="checkbox" id="checkbox"/>
 <div class="move"></div> </label> 
       </div> 
 <div class="form">
           
               <h2>LOGIN FORM</h2>
               <form action="login.php" method="post">
                   <?php if(isset($_GET['error'])) {
                       ?>
                       <p class="error"><?php echo $_GET['error']; ?></p>
                       <?php } ?>
                   <div class="page">
                       <input type="text" name="uname" placeholder="User Name">
                   </div>
                   <div class="page">
                       <input type="password" name="password" placeholder="Password">
                   </div>
                   
                   <div class="page">
                   <button type="submit">Login</button>
                   </div>
  
               </form>
               
           </div>
       </div> 
    </body>
</html>

