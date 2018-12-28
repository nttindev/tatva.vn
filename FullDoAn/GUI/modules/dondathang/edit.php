<?php
$open="dondathang";
// require_once __DIR__."/../../layout/header.php";
    // require_once __DIR__."/../../../bus/DonDatHangBUS.php";
    // require_once __DIR__."/../../../dao/DonDatHangDAo.php";
    // require_once __DIR__."/../../../dto/ChiTietDonDatHang.php";
    // require_once __DIR__."/../../../dto/DonDatHang.php";

    $loaisanphambus=new DonDatHangBus();
    $masp= $loaisanphambus->getInput('MaDonDatHang');
    $loaisanphambus->duyet($masp); ?>
    <script> window.location = "?a=7"; </script>