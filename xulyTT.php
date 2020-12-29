<?php
   include "ketnoi.php";
   include "Layouts/Main.css";
    if(isset($_POST['btnTT']))
    {
        include "hienthi.php";
        $taikhoan = $_POST['txtUsername'];
        $sql = "Select * from nguoidung where tentk='$taikhoan'";
        $data =$o->query($sql);
        Foreach($data as $v)
        {
        	?><div id="abc"><?php echo $v['mk']?></div><?php
            ?><img src="/anh/.<?php echo $v['anh']; ?>"></><?php
            ?><div id="abc"><?php echo $v['hoten']; ?></div><?php
            ?><div id="abc"><?php echo $v['sdt']; ?></div><?php
            ?><div id="abc"><?php echo $v['ngaysinh']; ?></div><?php
            if($v['gioitinh']=='1')
            {
                ?><div id="abc"><?php echo 'Nam'; ?></div><?php
            }
            else
            {
                ?><div id="abc"><?php echo 'Nu'; ?></div><?php
            }
        }
    }
?>