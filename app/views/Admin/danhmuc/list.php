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
                <th>Tên danh mục</th>
                <th>Mô tả danh mục</th>
                <th>Hình ảnh</th>
                <th>Trạng thái danh mục</th>
            </tr>
            <?php
              foreach ($listdm as $danhmuc) {
                extract($danhmuc);
                $editdm = "indexadmin.php?act=editdm&id=".$id;
                $deldm = "indexadmin.php?act=deldm&id=".$id;
                $img_path = "uploads/".$img;
                if(is_file($img_path)){
                    $img = "<img src='".$img_path."' height='80'>";
                }else{
                    $img = "no photo";
                }
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$ten_danh_muc.'</td>
                <td>'.$mo_ta.'</td>
                <td>'.$img.'</td>
                <td>'.$trang_thai.'</td>
                <td>
                  <a href="'.$editdm.'"><input type="button" value="Sửa"></a>
                  <a href="'.$deldm.'"><input type="button" value="Xóa"></a>
                </td>
            </tr>';
              }
            
            ?>
            <!-- <tr>
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
      <a href="indexadmin.php?act=adddm"><input type="button" value="Thêm mới"></a>
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