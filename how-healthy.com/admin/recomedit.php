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
	           $s=mysql_query('select * from tbl_recommend where image_id="'.$j.'" '); 
	           $xx=mysql_fetch_array($s);
	           ?>
 <div style="margin: 0 auto; width: 350px;">      
 <form name="editad" class="editTable" method="post" action="recomeditdb.php?l=<?php echo $xx['image_id'];?>" enctype="multipart/form-data">
 <table style="padding-top:50px">
 <tr><td style="color:#996600;font-family:Georgia, 'Times New Roman', Times, serif; font-size:13px">Image</td>
 <td><img src="images/<?php echo $xx['image_name'];  ?>" height="100px" width="200px"></td></tr>
 
 <tr><td style="color:#996600;font-family:Georgia, 'Times New Roman', Times, serif; font-size:13px">Add Image</td>
 <td><input type="file" name="img" ></td></tr>
      
     
  <div class="back">
 <tr><td colspan="2" align="center"> <input type="submit" name="save" value="Save" style="background-color:#996633; color:#EEEEEE; padding:5px; border:none;"/></td></tr>
  </div>
        </table>
		</form> 
         </div>
        </div>
         </div>
    <?php include "footer.php"; ?>
    
    </body>
      </html>
