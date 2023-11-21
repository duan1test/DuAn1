<?php
// model danh mục
function insert_danhmuc($ten_danh_muc,$mo_ta,$img,$trang_thai){
    $sql = "INSERT INTO tb_danh_muc(ten_danh_muc,mo_ta,img,trang_thai) VALUES('$ten_danh_muc','$mo_ta','$img','$trang_thai')";
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql = "SELECT * FROM tb_danh_muc ORDER BY id ASC";
    $listdm = pdo_query($sql);
    return $listdm;
}
function delete_danhmuc($id){
    $sql = "DELETE FROM tb_danh_muc WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_danhmuc($id){
    $sql = "SELECT * FROM tb_danh_muc WHERE id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$ten_danh_muc,$mo_ta,$img,$trang_thai){
    $sql = "UPDATE tb_danh_muc SET ten_danh_muc='".$ten_danh_muc."',mo_ta='".$mo_ta."',img='".$img."',trang_thai='".$trang_thai."' WHERE id=".$id;
    pdo_execute($sql);
}
//model sản phẩm
function insert_sanpham($ten_san_pham,$gia,$size,$mo_ta){
    $sql = "INSERT INTO tb_san_pham(ten_san_pham,gia,size,mo_ta) VALUES('$ten_san_pham','$gia','$size','$mo_ta')";
    pdo_execute($sql);
}
function loadall_sanpham(){
    $sql = "SELECT * FROM tb_san_pham ORDER BY id ASC";
    $listsp = pdo_query($sql);
    return $listsp;
}
function delete_sanpham($id){
    $sql = "DELETE FROM tb_san_pham WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM tb_san_pham WHERE id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id,$ten_san_pham,$gia,$size,$mo_ta){
    $sql = "UPDATE tb_san_pham SET id='".$id."',ten_san_pham='".$ten_san_pham."',gia='".$gia."',size='".$size."',mo_ta='".$mo_ta."' WHERE id=".$id;
    pdo_execute($sql);
}
?>