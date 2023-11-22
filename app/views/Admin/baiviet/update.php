<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php include "menungang/menungang.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include "menudoc/menudoc.php"; ?>

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
            
            <div class="content">
                <!--/. container-fluid -->
                <form action="indexadmin.php?act=updbv" method="POST">
                    
                    <label for="">Mã bài viết:</label><br>
                    

                    <label for="tieu_de">Tiêu đề:</label>
                    <input type="text" name="tieu_de" value="<?php echo $bv['tieu_de']; ?>"><br>

                    <label for="noi_dung">Nội dung:</label>
                    <textarea name="noi_dung"><?php echo $bv['noi_dung']; ?></textarea><br>

                    <label for="trang_thai">Ngày đăng:</label>
                    <input type="date" name="ngay_dang" value="<?php echo $bv['ngay_dang']; ?>"><br>

                    <label for="trang_thai">Trạng thái:</label>
                    <input type="text" name="trang_thai" value="<?php echo $bv['trang_thai']; ?>"><br>
                    
                    
                    <input type="hidden" name="id" value=<?= $id ?>>
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <a href="indexadmin.php?act=listbv"><input type="button" name="danhsach" value="Danh sách"></a>
                </form>



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