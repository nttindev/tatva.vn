
<?php
require_once __DIR__."/layout/header.php";
?>
                    <?php 
                           
                            // $a = isset($_GET['b'])&&$_GET['b']?$_GET['b']:'home';
                            // $path = 'GUI/page/'.$a.'.php';
                            // if(file_exists($path))
                            // {
                            //  include $path;
                                 
                            // }
                            // else
                            // {
                            //  include "GUI/page/404.php";
                            // }
                            $a = 1;
                          if(isset($_GET['a']))
                          {
                             $a = $_GET['a'];
                          }
                           switch($a)
                           {
                              case 1: 

                               include "page/pIndexAdmin.php";
                                break;
                                 
                            case 2:
                                 include "modules/dondathang/add.php";
                                 break;
                            case  3:
                                 include "modules/dondathang/ct.php";
                                 break;
                            case 4:
                                 include "modules/dondathang/delete.php";
                               break;
                            case 5:
                                include "modules/dondathang/delete1.php";
                                break;
                            case 6:
                                include "modules/dondathang/edit.php";
                                break;
                            case 7:
                                include "modules/dondathang/index.php";
                                break;
                             
                            case 9:
                                include "modules/dondathang/seach.php";
                                break;
                            case 10:
                                include "modules/dondathang/sua.php";
                                break;


                            case  11:
                                include "modules/hangsanxuat/add.php";
                                break;
                            case 12:
                                include "modules/hangsanxuat/delete.php";
                                break;
                            case 13:
                                include "modules/hangsanxuat/edit.php";
                                break;
                            case 14:
                                include "modules/hangsanxuat/index.php";
                                break;
                            case 15:
                                include "modules/hangsanxuat/seach.php";
                                break;



                            case 16:
                                include "modules/loaisanpham/add.php";
                                break;

                            case 17:
                                include "modules/loaisanpham/delete.php";
                                break;
                            case 18:
                                include "modules/loaisanpham/edit.php";
                                break;
                            case 19:
                                include "modules/loaisanpham/index.php";
                                break;
                            case 20:
                                include "modules/loaisanpham/seach.php";
                                break;


                            case 21:
                                include "modules/nguoidung/add.php";
                                break;
                            case 22:
                                include "modules/nguoidung/delete.php";
                                break;
                            case 23:
                                include "modules/nguoidung/edit.php";
                                break;
                            case 24:
                                include "modules/nguoidung/index.php";
                                break;
                            case 25:
                                include "modules/nguoidung/seach.php";
                                break;

                                
                            case 26:
                                include "modules/sanpham/add.php";
                                break;
                            case 27:
                                include "modules/sanpham/delete.php";
                                break;
                            case 28:
                                include "modules/sanpham/edit.php";
                                break;
                            case 29:
                                include "modules/sanpham/index.php";
                                break;
                            case 30:
                                include "modules/sanpham/seach.php";
                                break;
                                
                             default: 
                               include "page/404.php";
                               break;

                           }
                       ?>
                    <!-- chart-->
                    
                    <!-- /.row -->
 <?php require_once __DIR__."/layout/footer.php" ?>