<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

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
      <div class="content table_danhmuc"><!--/. container-fluid -->
        <table>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Size</th>
                <th>Mô tả</th>
            </tr>
            <?php
              foreach ($listsp as $sanpham) {
                extract($sanpham);
                $editsp = "indexadmin.php?act=editsp&id=".$id;
                $delsp = "indexadmin.php?act=delsp&id=".$id;
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$ten_san_pham.'</td>
                <td>'.$gia.'</td>
                <td>'.$size.'</td>
                <td>'.$mo_ta.'</td>
                <td>
                  <a href="'.$editsp.'"><input type="button" value="Sửa"></a>
                  <a href="'.$delsp.'"><input type="button" value="Xóa"></a>
                </td>
            </tr>';
              }
            
            ?>
            <!-- <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href=""><input type="button" value="Sửa"></a>
                  <a href=""><input type="button" value="Xóa"></a>
                </td>
            </tr> -->
        </table>
    </div>
    <br>
    <div class="content">
      <a href="indexadmin.php?act=addsp"><input type="button" value="Thêm mới"></a>
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