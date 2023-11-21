<?php
    include "../../models/pdo.php";
    include "../../models/AdminModel.php";
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
                include "danhmuc/add.php";
                break;
            case "listdm":
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "deldm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "editdm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case "updatedm":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
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
                      update_danhmuc($id,$ten_danh_muc,$mo_ta,$img,$trang_thai);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            //controller sản phẩm
            case "addsp":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $ten_san_pham = $_POST['ten_san_pham'];
                    $gia = $_POST['gia'];
                    $size = $_POST['size'];
                    $mo_ta = $_POST['mo_ta'];
                    insert_sanpham($ten_san_pham,$gia,$size,$mo_ta);
                    $thongbao = "Thêm thành công";
                }
                $listdm = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case "listsp":
                $listsp = loadall_sanpham();
                include "sanpham/list.php";
                break;
            case "delsp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsp = loadall_sanpham();
                include "sanpham/list.php";
                break;
            case "editsp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sp = loadone_sanpham($_GET['id']);
                }
                include "sanpham/update.php";
                break;
            case "updatesp":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $id_danh_muc = $_POST['id_danh_muc'];
                    $ten_san_pham = $_POST['ten_san_pham'];
                    $gia = $_POST['gia'];
                    $size = $_POST['size'];
                    $mo_ta = $_POST['mo_ta'];
                    update_sanpham($id,$ten_san_pham,$gia,$size,$mo_ta);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm = loadall_danhmuc();
                $listsp = loadall_sanpham();
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