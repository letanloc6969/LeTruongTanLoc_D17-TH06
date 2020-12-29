<?php
   include "ketnoi.php";
   include "Layouts/Main.css";
    if(isset($_POST['btnKhoa']))
    {
        include "QLTK.php";
        $taikhoan = $_POST['txtUsername'];
        $sql = "Select tinhtrang from nguoidung where tentk='$taikhoan'and tinhtrang='0'";
        $data =$o->query($sql);
        if(isset($data))
    {
        $sql1 = "UPDATE nguoidung SET tinhtrang='1' where tentk='$taikhoan'and tinhtrang='0'";
        $data1 =$o->query($sql);
    }
    else
    {
        echo "tài khoản đã bị khóa. <a href='thanhcong.php'>Trở lại</a>";
            exit;
    }      

    }
?>