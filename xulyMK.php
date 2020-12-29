<?php
    include "ketnoi.php";
    if(isset($_POST['btnDMK']))
    {
        $password = $newpassword = $newpassword1 = "";
        if(isset ($_POST['mk']))
        {
            $password = $_POST['mk'];
        }
        if(isset ($_POST['mk1']))
        {
            $newpassword = $_POST['mk1'];
        }
        if(isset ($_POST['mk2']))
        {
            $newpassword1 = $_POST['mk2'];
        }
        if($password != $_session['mk'])
        {
            echo "Mật khẩu cũ không đúng";
        }
        else
        {
            if($newpassword != $newpassword1)
            {
                echo "Mật khẩu mới nhập lại không đúng";
            }
        }
    }
    $sql1 = "UPDATE nguodung SET mk = '".$newpassword."' where mk = ".$_session['mk1']"";
    $data = $o->query($sql1);
?>