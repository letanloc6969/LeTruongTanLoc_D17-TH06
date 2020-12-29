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
            <i class="fa fa-heart logo-icon"></i> <h1>Tinder</h1>
        </div>
        <ul id="navbar"> 
         <li><a href="thanhcong.php">Home</a></li> 
         <li><a href="">About</a></li>
        </ul>
    </div>
    <div id="top-color-splash"></div>

    <div class="form"> 
        <form action='xulyTT.php' method='POST'>
            <h1 >Xem thông tin</h1>
            <table cellpadding='0' cellspacing='0' border='1'>
                <tr>
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input type='email' name='txtUsername' />
                    </td>
                </tr>
            </table>
            <input type='submit' name="btnTT" value='Xem' />
        </form>
    </div>
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script> 
 <script type="text/javascript"> 
 /* JavaScript goes here, at the bottom of the page */ 
 </script> 
 </body>
</html>