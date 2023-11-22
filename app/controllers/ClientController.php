<?php
    
    include "../models/pdo.php";
    include "../models/AdminModel.php";
    $load_danh_muc = loadall_danhmuc_home();
    include "../views/Client/header.php";
    $load_san_pham = loadall_sanpham_home();
    
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'shop':
                include "../views/Client/shop.php";
                break;
            case 'dangki':
                include "../views/Client/taikhoan/dangki.php";
                break;
            case 'dangnhap':
                include "../views/Client/taikhoan/dangnhap.php";
                break;
            case 'spct':
                break;
            default: include "../views/Client/home.php";
                break;
        }
    }else{
        include "../views/Client/home.php";
    }
    
    include "../views/Client/footer.php";

?>