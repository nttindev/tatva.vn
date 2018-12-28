<?php
    session_start();
    $open="loaisanpham";
    // require_once __DIR__."/../../../bus/LoaiSanPhamBUS.php";
    // require_once __DIR__."/../../../dao/loaisanphamdao.php";
    // require_once __DIR__."/../../../dto/loaisanpham.php";

    $loaisanphambus=new LoaiSanPhamBus();
    $masp= $loaisanphambus->getInput('MaLoaiSanPham');
    $editsanpham=$loaisanphambus->fetchID($masp);
    $num=$loaisanphambus->delete($masp); ?>
        <script> window.location = "?a=19"; </script><?php
?>