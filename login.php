


<?php
session_start()

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Đăng nhập admin</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header> 
            <div class="container"> 
                    <h1 style="color:#00008B;" align="center">ADMIN LOGIN </h1>
            </div>
        </header>
        <div class="body">
            <div style="width:600px;border-color:#00FFFF;"  class="container"> 
                <div  id="formlogin">
                    <form method="post" name="login-form">
                            <br>
                                <table>
                                    <tr height="50px">
                                       <td>
                                           Username
                                       </td>
                                       <td>
                                           <input type="text" name="taikhoan">
                                       </td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            Password
                                        </td>
                                        <td>
                                            <input id="submit" type="password" name="password">
                                        </td> 
                                    </tr>
                                </table>
                                <input style="
                                width: 100px;color: #228B22;margin-left: 100px;"id="btndangnhap" type="submit" name="login" value="Login">
                     </form>
        <?php
            
            $link = new mysqli('localhost','root','','login') or die('kết nối thất bại '); 
            mysqli_query($link, 'SET NAMES UTF8');
            if(isset($_POST['login'])){
                if ( empty($_POST['taikhoan']) or empty($_POST['password'])) { echo ' </br> <p style="color:red"> vui lòng nhập đầy đủ username và password !</p>';}
                else
                {
                    $username= $_POST['taikhoan'];
                    $password= $_POST['password'];
                    $spl="SELECT * FROM used where account = '$username' and password = '$password'";
                    $query = mysqli_query($link, $spl);
                    $num = mysqli_num_rows($query);
                    if($num == 0)
                        {
                            echo'</br> <p style="color:red"> Sai tên đăng nhập hoặc mật khẩu ! </p>';
                        }
                    else {

                        $_SESSION['username']= $username;
                        header('location:index.php');
                        
                        }
                }
                
            }

        ?>
                </div>
            </div>
        </div>
    </body>
 </html>

