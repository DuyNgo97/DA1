<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <base href="http://localhost/da1/" target="_blank">
    <link rel="icon" href="public/images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <!-- Boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <!-- header -->
    <?php
    require_once 'mvc/views/body/header.php'
    ?>
    <div class="product-body">
        <div class="product-main">
            <!-- Product main top -->
            <div class="product-main-top row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="public/images/car_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="public/images/car_2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="public/images/car_3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <!-- height lg 252.3px -->
                    <div class="banner_right">
                        <img class="mw-100" src="public/images/car_1.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- End product main top -->
            <!-- Product main body -->
            <div class="product-main-body d-flex justify-content-between mt-3 row">
                <!-- Sidebar left -->
                <div class="category border-s col-lg-3 p-3">
                    <div class="category-title">
                        <h4 class="category-title-h4">
                            Danh mục
                        </h4>
                    </div>
                    <div class="category-list">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Tất cả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cửa xe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đèn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sản phẩm 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sản phẩm 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Show product -->
                <div class="product-show col-lg-9 p-2">
                    <div class="product-show-top d-flex justify-content-between">
                        <div class="border-s col-3 dl-flex align-item-center text-center">
                            30 sản phẩm
                        </div>
                        <div class="border-s d-flex justify-content-center align-item-center col-4">
                            <div class="test">Sắp xếp:</div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Mặc định
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">A - Z</a></li>
                                    <li><a class="dropdown-item" href="#">Z - A</a></li>
                                    <li><a class="dropdown-item" href="#">Giá thấp đến cao</a></li>
                                    <li><a class="dropdown-item" href="#">Giá cao đến thấp</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-show-main d-flex gap-1 justify-content-between row mt-3">
                        <div class="product-item card-pd col-6 col-md-6 col-lg-3 text-center border-s">
                            <div class="img-thumbnail">
                                <img src="public/images/icon-exterior.png" alt="">
                            </div>
                            <div class="product-cate">
                                Đèn xe
                            </div>
                            <div class="product-name">
                                Đèn xe cao cấp 1
                            </div>
                            <div class="product-price">
                                2.000.000đ
                            </div>
                        </div>
                        <div class="product-item card-pd col-6 col-md-6 col-lg-3 text-center border-s">
                            <div class="img-thumbnail">
                                <img src="public/images/icon-exterior.png" alt="">
                            </div>
                            <div class="product-cate">
                                Đèn xe
                            </div>
                            <div class="product-name">
                                Đèn xe cao cấp 1
                            </div>
                            <div class="product-price">
                                2.000.000đ
                            </div>
                        </div>
                        <div class="product-item card-pd col-6 col-md-6 col-lg-3 text-center border-s">
                            <div class="img-thumbnail">
                                <img src="public/images/icon-exterior.png" alt="">
                            </div>
                            <div class="product-cate">
                                Đèn xe
                            </div>
                            <div class="product-name">
                                Đèn xe cao cấp 1
                            </div>
                            <div class="product-price">
                                2.000.000đ
                            </div>
                        </div>
                        <div class="product-item card-pd col-6 col-md-6 col-lg-3 text-center border-s">
                            <div class="img-thumbnail">
                                <img src="public/images/icon-exterior.png" alt="">
                            </div>
                            <div class="product-cate">
                                Đèn xe
                            </div>
                            <div class="product-name">
                                Đèn xe cao cấp 1
                            </div>
                            <div class="product-price">
                                2.000.000đ
                            </div>
                        </div>
                    </div>
                    <div class="navigation-s d-flex justify-content-center mt-3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    require_once 'mvc/views/body/footer.php'
    ?>
</body>

</html>