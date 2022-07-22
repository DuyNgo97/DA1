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
                <div class="col-sm-12 col-md-12 col-lg-12">
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
            </div>
            <!-- End product main top -->
            <!-- Product main body -->
            <div class="product-main-body d-flex justify-content-between mt-3 row">
                <!-- Sidebar left danh mục -->
                <div class="category col-lg-3">
                    <div class="border-s p-3">
                        <!-- Category -->
                        <?php
                        require_once "mvc/views/page/product/" . $data["category"] . ".php"
                        ?>
                    </div>
                    <div class="banner-left mt-2 d-none d-lg-block">
                        <img class="mw-100" src="public/images/sale.png" alt="">
                    </div>
                </div>
                <!-- Show product -->
                <div class="product-show col-lg-9 p-2">
                    <!-- Top show sản phẩm -->
                    <div class="product-show-top d-flex justify-content-between">
                        <div class="border-s col-5 col-md-4 d-flex justify-content-center">
                            <span style="padding: 6px 12px">30 Sản phẩm</span>
                        </div>
                        <div class="border-s col-5 col-md-4 d-flex justify-content-center align-item-center">
                            <span style="padding: 6px 12px">Sắp xếp:</span>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <!-- Show sản phẩm -->
                    <div class="product-show-main d-flex row mt-3">
                        <!-- item -->
                        <?php
                        require_once "mvc/views/page/product/" . $data["viewpart"] . ".php"
                        ?>
                        <!-- end item -->
                    </div>
                    <div class="navigation-s d-flex justify-content-center mt-3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-lg">
                                <li class="page-item shadow-none">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item shadow-none"><a class="page-link" href="#">1</a></li>
                                <li class="page-item shadow-none"><a class="page-link" href="#">2</a></li>
                                <li class="page-item shadow-none"><a class="page-link" href="#">3</a></li>
                                <li class="page-item shadow-none">
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