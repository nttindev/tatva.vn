<?php
    session_start();
    $open="sanpham";
    require_once __DIR__."/../../../bus/SanPhamBUS.php";
    require_once __DIR__."/../../../dao/sanphamdao.php";
    require_once __DIR__."/../../../dto/sanpham.php";
    $sanphambus=new SanPhamBus();
    $masp= $sanphambus->getInput('MaSanPham');
    $editsanpham=$sanphambus->fetchID($masp);
    $num=$sanphambus->delete($masp); ?>
        <script> window.location = "?a=29"; </script><?php
  
?>