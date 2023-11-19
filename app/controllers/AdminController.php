<?php

    include "../views/Admin/header/header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case "adddm":
                include "../views/Admin/danhmuc/add.php";
                break;
            default: include "../views/Admin/home/home.php";
                break;
        }
    }else{
        include "../views/Admin/home/home.php";
    }
    include "../views/Admin/footer/footer.php";

?>