<?php

	$con = mysqli_connect("localhost","root","","apsystem");
		if(mysqli_connect_errno())
		
			{
				echo "Failed to connect in Mysql: " . mysqli_connect_error();
			
			}
 ?>