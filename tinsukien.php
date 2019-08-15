<?php
    	
   
        $sql= "SELECT * FROM sukien
								ORDER BY id DESC 
								LIMIT 0,4";
       $data = mysqli_query($con,$sql);
?>