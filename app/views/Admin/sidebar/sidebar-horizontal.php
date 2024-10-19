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
                                            <img src="../../public/assets/images/default_avatar.png" class="user-img" alt="" />
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