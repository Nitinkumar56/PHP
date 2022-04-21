<?php
		define('max', 4);
		include "config.php";
		$rs = mysql_query('SELECT * FROM signup');
		$total = mysql_num_rows($rs);
	
		$total_pages = ceil($total /max);
		
		$page = $_GET['page']; 
		    
		if (0 == $page){
			$page = 1;
		}
		
		$start = max * ($page - 1);
		$end = max;
		
		$rs = mysql_query("SELECT * FROM signup limit $start,$end");

	?>

	<table border="1" width="400">
		<tr>
			<th>Name</th>
			
		</tr>
      <tr>
	   <td colspan="2">
		<?php
			while ($list = mysql_fetch_array($rs))
			  {
		         //echo '<pre>';
				?> <img src="image/<?php echo $list['imagename']; ?>" width="70" height="70" />
			<?php		
			  }
		?></td></tr> 

		<tr>
			
            <td colspan="2" align="center">Page:
			<?php
				for ($i = 1; $i <= $total_pages; $i++) {
					$txt = $i;
					if ($page != $i)
						$txt = "<a href=\"" . $_SERVER["PHP_SELF"] . "?page=$i\">$txt</a>";
			           echo $txt; 
			
				}
			?></td>
		</tr>
	</table>
	
	
	
	