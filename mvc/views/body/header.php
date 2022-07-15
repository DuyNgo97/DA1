<header class="header fixed-top">
    <!-- Top header -->
    <div class="top-header d-none d-lg-block">
        <div class="d-flex justify-content-between p-2 bg-success text-white text-uppercase">
            <div class="d-flex gap-3">
                <div>Chi nhánh</div>
                <div>Theo dõi đơn hàng</div>
            </div>
            <div>không ngại va chạm</div>
            <div class="d-flex gap-3">
                <div>Liên hệ</div>
                +84 9999999999
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- test -->
            <div class="collapse navbar-collapse navbar-collapse-1">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home" target="_self">Trang Chủ</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="product" target="_self">Cửa Hàng</a>
                    </li> -->
                    <li class="nav-item dropdown-center">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sản Phẩm
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="product" target="_self">Tất cả sản phẩm</a></li>
                            <li><a class="dropdown-item" href="#">Sản phẩm 1</a></li>
                            <li><a class="dropdown-item" href="#">Sản phẩm 2</a></li>
                            <li><a class="dropdown-item" href="#">Sản phẩm 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page</a>
                    </li>
                </ul>
            </div>
            <!-- Logo -->
            <a class="navbar-brand" href="home" target="_self">
                <img src="public/images/logo_shop.png" alt="">
            </a>
            <!-- Navbar right -->
            <div class="navbar-right">
                <ul class="d-flex navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <!-- user -->
                    <li class="nav-item d-none d-md-block dropstart">
                        <a href="#" tabindex="0" class="nav-link fs-4" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-start p-3">
                            <div class="drop-account">
                                <div class="avt-account">
                                    <img src="public/images/avt.png" width="80px" alt="">
                                </div>
                                <div class="name-account">
                                    <a href="#">Nguyễn Trung Khiêm</a>
                                </div>
                                <div class="drop-account-btn">
                                    <div class="btn-box">
                                        <ul class="d-flex p-0">
                                            <li class="p-1">
                                                <a class="btn" href="#">Tài Khoản</a>
                                            </li>
                                            <li class="p-1">
                                                <a class="btn" href="#">Đăng xuất</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- cart -->
                    <li class="nav-item">
                        <a tabindex="0" class="nav-link fs-4" href="cart" target="_self">
                            <i class="bi bi-cart position-relative">
                                <span class="position-absolute bottom-0 start-100 translate-middle badge rounded-pill bg-black fw-normal" style="font-size: 10px;">
                                    1
                                </span>
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Navbar menu Phone -->
            <div class="collapse navbar-collapse navbar-collapse-2" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Cửa Hàng</a>
                    </li> -->
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="product" target="_self">Sản Phẩm</a> -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sản Phẩm
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="product" target="_self">Tất cả sản phẩm</a></li>
                            <li><a class="dropdown-item" href="#">Sản phẩm 1</a></li>
                            <li><a class="dropdown-item" href="#">Sản phẩm 2</a></li>
                            <li><a class="dropdown-item" href="#">Sản phẩm 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page</a>
                    </li>
                    <li class="nav-item muti-nav">
                        <div class="box-1">
                            <a class="nav-link" href="login" target="_self">
                                <i class="bi bi-person-fill"></i> Đăng Nhập
                            </a>
                        </div>
                        |
                        <div class="box-2">
                            <a class="nav-link" href="login" target="_self">
                                <i class="bi bi-shield-lock-fill"></i> Đăng Ký
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>