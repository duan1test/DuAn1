<?php

    if(is_array($dm)){
        extract($dm);
    }
    $img_path = "uploads/".$img;
    if(is_file($img_path)){
        $img = "<img src='".$img_path."' height='80'>";
    }else{
        $img = "no photo";
    }
?>


<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php  include "menungang/menungang.php"; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php  include "menudoc/menudoc.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Trang quản trị</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Trang quản trị</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content"><!--/. container-fluid -->
      <form action="indexadmin.php?act=updatedm" method="post" enctype="multipart/form-data">
        <div class="content">
          <label for="">Mã danh mục:</label><br>
          <input type="text" name="id" disabled>
        </div>
        <div class="content">
          <label for="">Tên danh mục:</label><br>
          <input type="text" name="ten_danh_muc" value="<?=$ten_danh_muc?>">
        </div>
        <div class="content">
          <label for="">Mô tả danh mục:</label><br>
          <input type="text" name="mo_ta" value="<?=$mo_ta?>">
        </div>
        <div class="content">
          <label for="">Hình ảnh danh mục:</label><br>
          <input type="file" name="img">
          <?=$img?>
        </div>
        <div class="content">
          <label for="">Trạng thái danh mục:</label><br>
          <input type="text" name="trang_thai" value="<?=$trang_thai?>">
        </div>
        <br>
        <div class="content">
            <input type="hidden" name="id" value="<?=$id?>">
          <input type="submit" name="capnhat" value="Cập nhật">
          <a href="indexadmin.php?act=listdm"><input type="button" name="danhsach" value="Danh sách"></a>
        </div>
        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
      </form>
    </div>
      <div class="content-wrapper row mb-2 col-sm-6">
        
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->