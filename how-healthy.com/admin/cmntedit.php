<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php include"header.php" ?>
<?php include"sidebar.php" ?>
<?php include"config.php" ?>
<div class="Mid-panel">
			<div class="messagePanel">
            <div class="clear"></div>
              <?php 
	           $j=@$_GET['rd'];
	           $s=mysql_query('select * from tbl_comments where comment_id="'.$j.'" '); 
	           $x=mysql_fetch_array($s);
	           ?>
 <div style="margin: 0 auto; width: 350px;">      
 <form name="editad" class="editTable" method="post" action="cmnteditdb.php?l=<?php echo $x['comment_id'];?>">
 
 <font>Topic</font>
 <span><input type="text" name="tp" value="<?php echo $x['topic']; ?>" ></span>
     
      <font>status</font>
     <span><input type="text" name="st" value="<?php echo $x['status']; ?>" ></span>
      
     
  <div class="back">
  <input type="submit" name="save" value="Save" style="background-color:#996633; color:#EEEEEE; padding:5px; border:none;"/>
  </div>
        </form> 
         </div>
        </div>
         </div>
    <?php include "footer.php"; ?>
    
    </body>
      </html>
