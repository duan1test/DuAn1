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
              <h1 class="m-0">Quản lý user</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Quản lý user</li>
                
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content"><!--/. container-fluid -->
      <li class="">Thêm mới người dùng</li>
      <form action="indexadmin.php?act=adduser" method="POST">
        <div class="content">
          <label for="">ID</label><br>
          <input type="text" name="id" disabled>
        </div>
        <div class="content">
          <label for="">Tên user:</label><br>
          <input type="text" name="ten_user">
        </div>
        <div class="content">
          <label for="">Email:</label><br>
          <input type="text" name="email">
        </div>
        <div class="content">
          <label for="">SĐT:</label><br>
          <input type="text" name="sdt">
        </div>
        <div class="content">
          <label for="">Ngày sinh:</label><br>
          <input type="date" name="ngay_sinh">
        </div>
        <div class="content">
          <label for="">Địa chỉ:</label><br>
          <input type="text" name="dia_chi">
        </div>
        <div class="content">
          <label for="">Tài khoản:</label><br>
          <input type="text" name="account">
        </div>
        <div class="content">
          <label for="">Mật khẩu:</label><br>
          <input type="password" name="pass">
        </div>
        <div class="content">
          <label for="">Mô tả:</label><br>
          <input type="text" name="moTa">
        </div>
        <div class="content">
          <label for="">Chức vụ:</label><br>
          <select name="role" id="">
              <option value="1">Admin</option>
              <option value="2">User</option>
            </select>
        </div>
        <br>
        <div class="content">
          <input type="submit" name="themmoi" value="Thêm mới">
          <a href="indexadmin.php?act=listuser"><input type="button" name="danhsach" value="Danh sách"></a>
        </div>
        
         <?php
            if(isset($thongBao) && $thongBao != ""){
                echo $thongBao;
            }
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