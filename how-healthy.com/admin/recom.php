<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(
        function() {
          
      $('input[name="c1"]').click(function() {
                $(":checkbox").attr('checked', $(this).attr('checked'));
        });
      
     });
    </script>
</head>
<body>
<?php include"header.php" ?>
<?php include"sidebar.php" ?>
<?php include"config.php";  ?>
<div class="Mid-panel">
  <div class="messagePanel">
    <form method="post" action="recomdb.php" style="padding:10px; text-align:left; background-color:#FFCC66;">
      
      <table cellspacing="10px" cellpadding="5px" style="font-family:arial; font-size:13px;">
        <tr>
          <th> <input type="checkbox" name="c1" /></th>
          <th style="color:#996666">Image_id</th>
          <th style="color:#996666">Topic</th>
          <th style="color:#996666">Image_Name</th>
          <th style="color:#996666">Action</th>
        </tr>
        <tr>
          <?php 
            
 $se=mysql_query('select * from tbl_recommend');  

 define('max',7 );
 
		$rs = mysql_query('SELECT * FROM tbl_recommend order by image_id desc');
		$total = mysql_num_rows($rs);
	
		$total_pages = ceil($total /max);
		
		$page = @$_GET['page']; 
		    
		if (0 == $page){
			$page = 1;
		}
		
		$start = max * ($page - 1);
		$end = max;
		
			$rs = mysql_query("SELECT * FROM tbl_recommend order by image_id desc limit $start,$end");

	?>
          <?php while($row=mysql_fetch_array($rs)){ ?>
          <td><input type="checkbox" name="c2[]" value="<?php echo $row['image_id']; ?>" /></td>
          <td><?php echo $row['image_id']; ?></td>
          <td><?php echo $row['topic']; ?></td>
          <td><?php echo $row['image_name']; ?></td>
           <td><a href="recomview.php?v=<?php echo $row['image_id']; ?>">
            <input type="button" value="View" style="border:none; background-color:#996600; color:#EEEEEE; padding:2px;" ></a>
           <a href="recomedit.php?rd=<?php echo $row['image_id']; ?>">
            <input type="button" value="Edit"  style="border:none; background-color:#996600; color:#EEEEEE; padding:2px;" >
            </a></td>
        </tr>
        <?php  } ?>
        <tr>
          <td colspan="6"align="center"><?php
				for ($i = 1; $i <= $total_pages; $i++) {
					$txt = $i;
					if ($page != $i)
						$txt = "<a href=\"" . $_SERVER["PHP_SELF"] . "?page=$i\">$txt</a>";
			           echo $txt; 
			
				}
			?></td>
        </tr>
        </table>
          <select name="s1">
          <option value="d">Delete</option>
            </select>
          <input type="submit" name="s2" value="GO" />
      
      
    </form>
  </div>
</div>
<?php include"footer.php" ?>
