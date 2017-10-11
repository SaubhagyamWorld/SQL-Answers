<?php	
	CREATE TABLE 
		comments( id  INT  NOT NULL AUTO_INCREMENT, user_id  INT(10) NOT NULL, 
				  product_id INT(10) NOT NULL,comment VARCHAR(255) NOT NULL,
				  status INT(1),abuse_comment INT(1),like_comment INT(10), 
				  create_at DATE, PRIMARY KEY ( id ));
?>				  


