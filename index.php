<?php
    include "app/models/pdo.php";
    include "app/models/AdminModel.php";
    include "app/views/Client/header.php";
    $load_san_pham = loadall_sanpham_home();
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'home':
                
                break;
            default: include "../views/Client/home.php";
                break;
        }
    }else{
        include "app/views/Client/home.php";
    }
    include "app/views/Client/footer.php";

?>