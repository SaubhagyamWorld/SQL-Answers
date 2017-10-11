<?php 

	$count = "SELECT COUNT(user_id)
			FROM comment_read where user_id = ".$id." and read = '0' and product_id = ".$product_id.";	
			GROUP BY product_id";

?>
