<?php
    include "../models/pdo.php";
    include "../models/AdminModel.php";
    include "../views/Admin/header/header.php";
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
                    $img = $_FILES['img']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                      insert_danhmuc($ten_danh_muc,$mo_ta,$img,$trang_thai);
                    $thongbao = "Thêm thành công";
                }
                include "../views/Admin/danhmuc/add.php";
                break;
            case "listdm":
                $listdm = loadall_danhmuc();
                include "../views/Admin/danhmuc/list.php";
                break;
            case "deldm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdm = loadall_danhmuc();
                include "../views/Admin/danhmuc/list.php";
                break;
            case "editdm":
                

            //controller sản phẩm
            case "listsp":
                include "sanpham/list.php";
                break;


            //controller banner




            //controller user




            //controller khách hàng

            //controller bình luận



            //controller bài viết
            default: include "../views/Admin/home/home.php";
                break;
        }
    }else{
        include "../views/Admin/home/home.php";
    }
    include "../views/Admin/footer/footer.php";

?>