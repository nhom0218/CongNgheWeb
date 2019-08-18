<?php 
	include 'connect.php';
 ?>
 
 <!DOCTYPE html>
<html>
    <head>
        <title>Đăng kí</title>
        <link rel="stylesheet" href="css/dangky.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    </head>
    <body>
        <div class="to">
            <form action="" method="POST" role="from">    
            
                <h2>Đăng ký</h2>
                <i class="fab fa-app-store-ios"></i>

                
                <?php 
                    if(isset($_POST['submit'])){
                    	  if (empty($_POST['username'])or empty($_POST['password'])) {
                    		  echo '<p style="color:red">Vui lòng không để trống</p>';
                    	   } 
                        else{
                         $password = $_POST['password'];
                         $password2 = $_POST['password2'];
                         $username = $_POST['username'];
                         
                    	  	if($password2 != $password){
                    	  		echo '<p style="color:red">password không trùng nhau</p>';
                    	  	  }
                          else{
                    	  		$sql= "select * from user where username='$username'";
                    	  		$query=mysqli_query($con,$sql);
                    	  		$num=mysqli_num_rows($query);
                    	  		if($num==0){
                    	  			$sql2="INSERT INTO user(username,password) VALUES('$username','$password')";
                    	  			$them=mysqli_query($con,$sql2);
                    	  			if($them){
                    	  				echo '<p style="color:#059824">thêm thành công</p>';
                    	  			}
                              else{
                    	  				echo '<p style="color:red">thêm không thành công</p>';
                    	  			}

                    	  		}
                            else{
                    	  			echo '<p style="color:red">Tên đã tồn tại</p>';
                    	  		}
                    	  	}
                    	  }
                      }
                     
                    
                ?>     
            <label style="margin-left: -150px;">Username</label>
                <input type="text" name="username">
                <label>Password</label>
                <input type="text" name="password">    
                <label style="margin-left: -180px;">Confirm password</label>
                <input type="text" name="password2">
                <input id="submit" type="submit" name="submit" value="submit">
            </form>
        </div>
    </body>
</html>