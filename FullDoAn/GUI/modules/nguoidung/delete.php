<?php
    session_start();
    $open="nguoidung";
    // require_once __DIR__."/../../../bus/taikhoanbus.php";
    // require_once __DIR__."/../../../dao/taikhoandao.php";
    // require_once __DIR__."/../../../dto/taikhoan.php";

    $loaisanphambus=new TaiKhoanBUS();
    $masp= $loaisanphambus->getInput('MaNguoidung');
    $editsanpham=$loaisanphambus->fetchID($masp);
    $num=$loaisanphambus->delete($masp); ?>
        <script> window.location = "?a=24"; </script><?php
?>
