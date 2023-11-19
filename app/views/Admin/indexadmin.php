<?php
    include "../../models/pdo.php";
    include "header/header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            //controller danh mục
            case "adddm":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $id = $_POST['id'];
                    $ten_danh_muc = $_POST['ten_danh_muc'];
                    $mo_ta = $_POST['mo_ta'];
                    $trang_thai = $_POST['trang_thai'];
                    $id = $_POST['id'];
                }
                include "danhmuc/add.php";
                break;
            case "listdm":
                include "danhmuc/list.php";
                break;
            //controller sản phẩm
            case "listsp":
                include "sanpham/list.php";
                break;


            //controller banner




            //controller user




            //controller khách hàng

            //controller bình luận



            //controller bài viết
            default: include "home/home.php";
                break;
        }
    }else{
        include "home/home.php";
    }
    include "footer/footer.php";

?>