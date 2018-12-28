<?php
    session_start();
    $open="hangsanxuat";
    // require_once __DIR__."/../../../bus/HangSanXuatBUS.php";
    // require_once __DIR__."/../../../dao/HangSanXuatDAo.php";
    // require_once __DIR__."/../../../dto/HangSanXuat.php";

    $loaisanphambus=new HangSanXuatBUS();
    $masp= $loaisanphambus->getInput('MaHangSanXuat');
    $editsanpham=$loaisanphambus->fetchID($masp);
    $num=$loaisanphambus->delete($masp); ?>
        <script> window.location = "?a=14"; </script><?php
?>