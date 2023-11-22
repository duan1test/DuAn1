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
      <div class="content table_danhmuc"><!--/. container-fluid -->
        <table>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên banner</th>
                <th>Hình ảnh</th>
                <th>Link</th>
                <th>Trạng thái</th>
          </tr>
          <?php
            foreach ($listbanner as $banner) {
              extract($banner);
              $img_path = "uploads/".$hinh_anh;
                if(is_file($img_path)){
                    $hinh_anh = "<img src='".$img_path."' height='80'>";
                }else{
                    $hinh_anh = "no photo";
                }
                $editbanner = "indexadmin.php?act=editbanner&id=".$id;
                $delbanner = "indexadmin.php?act=delbanner&id=".$id;
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$ten_banner.'</td>
                <td>'.$hinh_anh.'</td>
                <td>'.$link.'</td>
                <td>'.$trang_thai.'</td>
                <td>
                  <a href="'.$editbanner.'"><input type="button" value="Sửa"></a>
                  <a href="'.$delbanner.'"><input type="button" value="Xóa"></a>
                </td>
            </tr>';
            }
          
          ?>
          </table>
    </div>
    <br>
    <div class="content">
      <a href="indexadmin.php?act=addbanner"><input type="button" value="Thêm mới"></a>
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