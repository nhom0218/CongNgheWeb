<?php 
	include 'connect.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/sukien.css">
    <script src="jss/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="jss/bootstrap.min.js"></script>
</head>
<body> 
       <h2 style="text-align: center; color: #003478;"><b>SỰ KIỆN NỔI BẬT</b></h2>
  <div class="event">
  	
    <div class="row"> 
    	<?php
									require 'tinsukien.php' ;
									if(mysqli_num_rows($data)>0){
										$i =0;
																		
									while ($row = mysqli_fetch_assoc($data)){
										
											$i++;
										?>
         	                        
        <div class="col-md-3">
                    <div style="text-align:center;" class=" box"><img src="img/<?php echo $row['img'] ?>" alt=""></div>
                
                    <h3 ><a style="text-decoration: none;" href="sukien1.php?id=<?=$row['id']?>"><?php echo $row['tieude'] ?></a></h3>
             </div>
        </div>
     <?php }} ?> 
	</div>														
  </div>
</body>
</html>