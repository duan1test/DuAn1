<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf_token" content="" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Fast Learn</title>
        <!--favicon-->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="../../../public/css/app.css">
        <link rel="stylesheet" href="../../../public/css/metisMenu.min.css">
        <link rel="stylesheet" href="../../../public/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../public/css/icons.css">
        <link rel="stylesheet" href="../../../public/css/syndash.css">
        <link rel="stylesheet" href="../../../public/css/select2-bootstrap4.css">
        <link rel="stylesheet" href="../../../public/css/select2.min.css">
        <link rel="stylesheet" href="../../../public/css/custom.css">
        
    </head>
    <body>
        <!-- wrapper -->
        <div class="wrapper">
            <!--sidebar-wrapper-->

            <div class="sidebar-wrapper" data-simplebar="true" style="background-color: #1A72B9;">
                <div class="sidebar-header" style="background-color: #1A72B9;">
                    <div>
                        <a href="#">
                            <h4 class="logo-text text-white">Fast Learn</h4>
                        </a>
                    </div>
                    <a href="javascript:;" class="toggle-btn ms-auto text-white"> <i class="bx bx-menu"></i>
                    </a>
                </div>
                <!--navigation-->
                <ul class="metismenu invisible" id="menu">
                    <li>
                        <a href="/" class="">
                            <div class="parent-icon">
                                <i class="fa-solid fa-house text-white"></i>
                            </div>
                            <div class="menu-title text-white">Trang chủ</div>
                        </a>
                    </li>

                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon">
                                    <i class="fa-regular fa-address-card text-white"></i>
                                </div>
                                <div class="menu-title text-white">Quản lý hồ sơ</div>
                            </a>
                            <ul style="background-color: unset;">
                                <li>
                                    <a href="" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Quản lý sinh viên
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Quản lý giảng viên
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon">
                                    <i class="fa-solid fa-school text-white"></i>
                                </div>
                                <div class="menu-title text-white">Chương trình học</div>
                            </a>
                            <ul style="background-color: unset;">
                                <li>
                                    <a href="" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Quản lý khoá học
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Tạo khoá học
                                    </a>
                                </li>
                            </ul>
                        </li>

                    
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon">
                                    <i class="fa-solid fa-solar-panel text-white"></i>
                                </div>
                                <div class="menu-title text-white">Hệ thống</div>
                            </a>
                            <ul style="background-color: unset;">
                                <li>
                                    <a href="" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Phân quyền
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Bài đăng
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Phản hồi
                                    </a>
                                </li>
                            </ul>
                        </li>
                </ul>
            </div>


            <!--header-->

            <header class="top-header">
                <nav class="navbar navbar-expand" style="background-color: #1A72B9;">
                    <div class="left-topbar d-flex align-items-center">
                        <a href="javascript:;" class="toggle-btn text-white"> <i class="bx bx-menu"></i>
                        </a>
                    </div>
                    <div class="right-topbar ms-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item search-btn-mobile">
                                <a class="nav-link position-relative" href="javascript:;"> <i
                                        class="bx bx-search vertical-align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-user-profile">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                    data-bs-toggle="dropdown">
                                    <div class="d-flex user-box align-items-center">
                                        <div class="user-info">
                                            <p class="user-name mb-0 text-white">Admin</p>
                                        </div>
                                            <!-- <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover" src="" alt="" />
                                            </button> -->
                                            <img src="../../../public/assets/images/default_avatar.png" class="user-img" alt="" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Quản lý tài khoản
                                    </div>

                                    <x-dropdown-link href="">
                                        Cá nhân
                                    </x-dropdown-link>

                                        <x-dropdown-link href="">
                                            
                                        </x-dropdown-link>
                                

                                    <div class="border-t border-gray-200"></div>
                                
                                    <form method="POST" action="" x-data>
                                        @csrf
                                        <x-dropdown-link href="" @click.prevent="$root.submit();">
                                            Đăng xuất
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!--main-->
            <div class="page-wrapper">
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="row d-flex justify-content-center ">
                            <div class="card radius-15" style="border-radius:4px !important; max-width: 1200px;">
                                <div class="card-body">
                                    <div class="row">
                                        <h4 class="h4">
                                            Tin hoạt động
                                        </h4>
                                    </div>
                                    <div class="row">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--start overlay-->
            <div class="overlay toggle-btn-mobile"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> 
            <a href="javaScript:;" class="back-to-top">
                <i class='bx bxs-up-arrow-alt'></i>
            </a>
            <!--End Back To Top Button-->
        </div>
        <!-- end wrapper -->
        
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../../../public/js/syndash.js"></script>
    <script src="../../../public/js/main.js"></script>
    <script src="../../../public/js/metisMenu.js"></script>
</html>

