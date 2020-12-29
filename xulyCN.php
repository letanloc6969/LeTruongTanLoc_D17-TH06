<?php
    include "ketnoi.php";
    if(isset($_POST['btnCN']))
    {
        $username = $_POST['tentk'];
        $hoten = $_POST['tennd'];
        $ngaysinh = $_POST['ns'];
        $sdt = $_POST['sdt'];
        $anh= $_POST['anh'];
    }
    $sql = "UPDATE nguoidung SET hoten='$hoten',ngaysinh='$ngaysinh',sdt='$sdt',anh='$anh' WHERE tentk='$username'";
    $data = $o->query($sql);
    if(isset($data))
    {
        
         header("location:hienthi.php");
    }
    else
    {
        echo "cập nhật thất bại. <a href='index.php'>Trở lại</a>";
        exit;
    }
?>