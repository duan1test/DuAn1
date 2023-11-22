<?php
    if(is_array($banner)){
        extract($banner);
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
      <form action="indexadmin.php?act=updatebanner" method="post" enctype="multipart/form-data">
        <div class="content">
          <label for="">Tên banner:</label><br>
          <input type="text" name="ten_banner" value="<?=$ten_banner?>">
        </div>
        <div class="content">
          <label for="">Hình ảnh:</label><br>
          <input type="file" name="hinh_anh">
          <?=$hinh_anh?>
        </div>
        <div class="content">
          <label for="">Link:</label><br>
          <input type="text" name="link" value="<?=$link?>">
        </div>
        <div class="content">
          <label for="">Trạng thái:</label><br>
          <input type="text" name="trang_thai" value="<?=$trang_thai?>">
        </div>
        <br>
        <div class="content">
            <input type="hidden" name="id" value="<?=$id?>">
          <input type="submit" name="capnhat" value="Cập nhật">
          <a href="indexadmin.php?act=listbanner"><input type="button" name="danhsach" value="Danh sách"></a>
        </div>
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