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
                    $img = $_FILES['img']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    insert_sanpham($ten_san_pham,$gia,$img,$size,$mo_ta);
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
                $listdm = loadall_danhmuc();
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
                    $img = $_FILES['img']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    update_sanpham($id,$ten_san_pham,$gia,$img,$size,$mo_ta);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm = loadall_danhmuc();
                $listsp = loadall_sanpham();
                include "sanpham/list.php";
                break;
            //controller banner
                case "addbanner":
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $ten_banner = $_POST['ten_banner'];
                        $link = $_POST['link'];
                        $trang_thai = $_POST['trang_thai'];
                        $hinh_anh = $_FILES['hinh_anh']['name'];
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          }
                          insert_banner($ten_banner,$hinh_anh,$link,$trang_thai);
                        $thongbao = "Thêm thành công";
                    }
                    include "banner/add.php";
                    break;
                case "listbanner":
                    $listbanner = loadall_banner();
                    include "banner/list.php";
                    break;
                case "delbanner":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_banner($_GET['id']);
                    }
                    $listbanner = loadall_banner();
                    include "banner/list.php";
                    break;
                case "editbanner":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $banner = loadone_banner($_GET['id']);
                    }
                    include "banner/update.php";
                    break;
                case "updatebanner":
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id = $_POST['id'];
                        $ten_banner = $_POST['ten_banner'];
                        $link = $_POST['link'];
                        $trang_thai = $_POST['trang_thai'];
                        $hinh_anh = $_FILES['hinh_anh']['name'];
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          }
                          update_banner($id,$ten_banner,$hinh_anh,$link,$trang_thai);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listbanner = loadall_banner();
                    include "banner/list.php";
                    break;



            //controller user

            case "listuser":
                $listtkuser = loadall_taikhoan();
                include "quanlinguoidung/list.php";
                break;
            
            case 'adduser':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tenUser = $_POST['ten_user'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $ngaySinh = $_POST['ngay_sinh'];
                    $diaChi= $_POST['dia_chi'];
                    $account = $_POST['account'];
                    $pass = $_POST['pass'];
                    $moTa = $_POST['moTa'];
                    $role = $_POST['role'];

                    insert_taikhoan_user($tenUser,$email,$sdt,$ngaySinh,$diaChi,$account,$pass,$moTa,$role);
                    $thongBao = " Thêm thành công";
                }
                include "quanlinguoidung/add.php";
                break;

            case 'suauser':
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    $tk = loadone_tai_khoan($id);
                }
                
                $list = load();
                include "quanlinguoidung/update.php";
                break;
            
            case 'upduser':
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $id = $_POST['id'];
                    $tenUser = $_POST['ten_user'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $ngaySinh = $_POST['ngay_sinh'];
                    $diaChi= $_POST['dia_chi'];
                    $account = $_POST['account'];
                    $pass = $_POST['pass'];
                    $moTa = $_POST['moTa'];
                    $role = $_POST['role'];

                    update_user($id,$tenUser,$email,$sdt,$ngaySinh,$diaChi,$account,$pass,$moTa,$role);
                    $thongBao = " Thêm thành công";
                }
                include "quanlinguoidung/list.php";
                break;

            case 'deluser':
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    delete_taikhoan($id);
                }

                $listtkuser = loadall_taikhoan();
                include "quanlinguoidung/list.php";
                break;



            //controller khách hàng
            case 'addkh':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tenKH = $_POST['ten_kh'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $diaChi= $_POST['dia_chi'];
                    $account = $_POST['account'];
                    $pass = $_POST['pass'];
                    $moTa = $_POST['moTa'];

                    insert_taikhoan_kh($tenKH,$email,$sdt,$diaChi,$account,$pass,$moTa);
                    $thongBao = " Thêm thành công";
                }
                include "quanlykhachhang/add.php";
                break;

            case 'listkh':
                $listkh = loadall_taikhoan_kh();
                include "quanlykhachhang/list.php";
                break;

            case 'suakh':
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    $tk = loadone_tai_khoan_kh($id);
                }
                
                $list = load_kh();
                include "quanlykhachhang/update.php";
                break;

            case 'updkh':
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $id = $_POST['id'];
                    $tenKH = $_POST['ten_kh'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $diaChi= $_POST['dia_chi'];
                    $account = $_POST['account'];
                    $pass = $_POST['pass'];
                    $moTa = $_POST['moTa'];

                    update_kh($id,$tenKH,$email,$sdt,$diaChi,$account,$pass,$moTa);
                    $thongBao = " Cập nhật thành công";
                }
                $listkh = loadall_taikhoan_kh();
                include "quanlykhachhang/list.php";
                break;

            case 'delkh':
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    delete_taikhoan_kh($id);
                }

                $listkh = loadall_taikhoan_kh();
                include "quanlykhachhang/list.php";
                break;
            //controller bình luận
            case "listbl":
                $sql = "select * from tb_binh_luan";
                $listbl = pdo_query($sql);
                include "binhluan/list.php";
                break;
            case "delbl":
                if (isset($_GET['id']) && ($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "delete from tb_binh_luan where id = '$id'";
                    pdo_execute($sql);
                }
                include "binhluan/list.php";
                break;
            case "editbl":
                $id = $_GET['id'];
                $sql = "select * from tb_binh_luan where id = '$id'";
                $listbl = pdo_query($sql);
                include "binhluan/update.php";
                break;


            //controller bài viết
            case "addbv":
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $id = $_POST['id'];
                    $tieu_de = $_POST['tieu_de'];
                    $noi_dung = $_POST['noi_dung'];
                    $ngay_dang = $_POST['ngay_dang'];
                    $trang_thai = $_POST['trang_thai'];
                    $sql = "insert into tb_bai_viet(tieu_de,noi_dung,ngay_dang,trang_thai) values('$tieu_de','$noi_dung','$ngay_dang','$trang_thai')";
                    pdo_execute($sql);
                }
                include "baiviet/add.php";
                break;
            case "listbv":
                $listbv = loadall_bai_viet();
                include "baiviet/list.php";
            case "delbv":
                if (isset($_GET['id']) && ($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "delete from tb_bai_viet where id = '$id'";
                    pdo_execute($sql);
                }
                $sql = "select * from tb_bai_viet";
                $listbv = pdo_query($sql);
                include "baiviet/list.php";
                break;
            case "editbv":
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    $bv = loadone_bai_viet($id);
                }
                
    
                include "baiviet/update.php";
                break;
    
            case "updbv":
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $tieu_de=$_POST['tieu_de'];
                    $noi_dung=$_POST['noi_dung'];
                    $trang_thai=$_POST['trang_thai'];
                    $id=$_POST['id'];
                    
                    update_bv($id,$tieu_de,$noi_dung,$ngay_dang,$trang_thai);
                    $thongBao = " Cập nhật thành công";
                }
                $listbv = loadall_bai_viet();
                include "baiviet/list.php";
                break;
            default: include "home/home.php";
                break;
        }
    }else{
        include "home/home.php";
    }
    include "footer/footer.php";

?>