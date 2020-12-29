<!DOCTYPE html>
<html> 
 <head> 
 <meta charset="UTF-8"> 
 <title>Hen Ho</title> 
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
 <?php
 include "Layouts/Main.css";
 ?>
 </head> 
 <body>
    <div id="top-bar"></div>
    <div class="normal-wrapper"> 
        <div id="logo-container"> 
            <i class="fa fa-heart logo-icon"></i><h1>Tinder</h1>
        </div>
        <ul id="navbar"> 
         <li><a href="thanhcong.php">Home</a></li> 
         <li><a href="">About</a></li>
        </ul>
    </div>
    <div id="top-color-splash"></div>
    <div class="form"> 
     <form  action="xulyMK.php" method="POST">
     Đổi Mật Khẩu!
     <hr>
     	Mật khẩu cũ: <br><hr>
        <input type="password" name="mk" placeholder="Password"><br><hr>
        Nhập mật khẩu mới: <br><hr>
        <input type="password" name="mk1" placeholder="NewPassword"><br>
        Nhập lại mật khẩu mới: <br><hr>
        <input type="password" name="mk2" placeholder="NewPassword"><br>
        <input type="submit" name="btnDMK" value="Đổi mật khẩu">
</form>
     </div>
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script> 
 <script type="text/javascript"> 
 /* JavaScript goes here, at the bottom of the page */ 
 </script> 
 </body>
</html>