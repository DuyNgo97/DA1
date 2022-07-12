<!-- content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <base href="http://localhost/da1/" target="_blank">
    <link rel="icon" href="public/images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" type="text/css" href="public/css/slick.css">
    <link rel="stylesheet" type="text/css" href="public/css/slick-theme.css">
    <!-- Boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <?php
    require_once 'mvc/views/body/header.php'
    ?>
    <div class="container-fluid p-0 content">
        <!-- images carousel -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="public/images/car_1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="public/images/car_2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Trước</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sau</span>
            </button>
        </div>

        <!-- Tìm mẫu xe - Search -->
        <div class="search w-100 p-3 bg-success">
            <div class="text-center text-white mb-3">
                <h4 class="fs-4">Tìm kiếm loại phụ tùng</h4>
                <h2 class="fs-2">GIÁ ƯU ĐÃI!</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3 box">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Chọn năm</option>
                        <option value="1">2022</option>
                        <option value="2">2021</option>
                        <option value="3">2020</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-3 box">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Chọn hãng</option>
                        <option value="1">Vinfast</option>
                        <option value="2">BMW</option>
                        <option value="3">Honda</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-3 box">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Chọn mẫu</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button type="button" class="btn btn-info w-100 text-white">Tìm kiếm <i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>

        <!-- Đặc điểm xe -->
        <div class="car-ed w-100 p-3 text-center">
            <h4>NHỮNG TÍNH NĂNG MỚI</h4>
            <h2>NHỮNG SẢN PHẨM TUYỆT VỜI</h2>
            <div class="row">
                <div class="col-sm-6 col-md-3 box-item">
                    <div class="card text-start">
                        <img class="p-3 mx-auto" src="public/images/car-icon.png">
                        <div class="card-body">
                            <h5 class="card-title">Khám phá những <br> sản phẩm tốt nhất</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <a href="#" class="btn btn-primary">Tìm hiểu ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 box-item">
                    <div class="card text-start">
                        <img class="p-3 mx-auto" src="public/images/meter-icon.png" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tìm hiểu về hệ thống <br> nâng cao hiệu xuất xe</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <a href="#" class="btn btn-primary">Tìm hiểu ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 box-item">
                    <div class="card text-start">
                        <img class="p-3 mx-auto" src="public/images/accessories-icon.png" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Get accessories for <br> all cars</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <a href="#" class="btn btn-primary">Tìm hiểu ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 box-item">
                    <div class="card text-start">
                        <img class="p-3 mx-auto" src="public/images/wheel-icon.png" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Get accessories for <br> all cars</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <a href="#" class="btn btn-primary">Tìm hiểu ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top bán chạy -->
        <div class="best-sellers">
            <div class="d-flex align-items-center p-3 best-sellers-k">
                <div class="margin-k">
                    <span class="text-uppercase fw-bold fs-2">Hàng bán chạy</span>
                </div>
                <div>
                    <a href="#" class="btn btn-success">Xem thêm</a>
                </div>
            </div>
            <!-- Tabs menu -->
            <div class="d-flex align-items-start p-3 tabs-k">
                <div class="nav flex-column nav-pills nav-pills-k me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Nội thất</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Đèn</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Hiệu suất</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Bánh xe</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        <!-- Hiện ra 3 sản phẩm -->
                        <div class="row">
                            <div class="col-4 box-item">
                                <div class="hover">
                                    <a class="btn" href="#">
                                        Mua ngay
                                    </a>
                                </div>
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <!-- Hiện ra 3 sản phẩm -->
                        <div class="row">
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <!-- Hiện ra 3 sản phẩm -->
                        <div class="row">
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                        <!-- Hiện ra 3 sản phẩm -->
                        <div class="row">
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="public/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                            <div class="col-4 box-item">
                                <div class="thumnail-sp">
                                    <img src="http://localhost/images/den-bi-xenon4.jpg" width="80%" alt="">
                                </div>
                                <div class="name-sp">Đèn ô tô</div>
                                <div class="price-sp">1.300.000 VNĐ</div>
                                <div class="start-sp">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> (4)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-0 bg-img-1"></div>

        <!-- best collection -->
        <div class="best-collection">
            <div class="title-top">
                <div>
                    <h4>DANH MỤC NỔI BẬT</h4>
                </div>
                <div>
                    <h2>BỘ SƯU TẬP</h2>
                </div>
            </div>
            <div class="content p-3">
                <div class="row box">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 position-relative box-1">
                        <div class="img text-start">
                            <img class="rounded-3" src="public/images/collection-img1.webp" alt="">
                        </div>
                        <div class="detail detail-1 position-absolute">
                            <h2>Lựa chọn <br> hoàn hảo</h2>
                            <a href="#" class="link">Xem ngay</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 position-relative box-2">
                        <div class="img text-end">
                            <img class="rounded-3" src="public/images/collection-img2.webp" alt="">
                        </div>
                        <div class="detail detail-2 position-absolute">
                            <h2>Mặt hàng <br> mới nhất</h2>
                            <a href="#" class="link">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slick slide-->
        <div class="slick-app test">
            <div class="item">
                <img src="public/images/icon-parts.png" alt="">
                <span>Phụ tùng</span>
                <a class="btn" href="#">Xem Ngay</a>
            </div>
            <div class="item">
                <img src="public/images/icon-interior.png" alt="">
                <span>Nội thất</span>
                <a class="btn" href="#">Xem Ngay</a>
            </div>
            <div class="item">
                <img src="public/images/icon-exterior.png" alt="">
                <span>Ngoại thất</span>
                <a class="btn" href="#">Xem Ngay</a>
            </div>
            <div class="item">
                <img src="public/images/icon-lighting.png" alt="">
                <span>Đèn</span>
                <a class="btn" href="#">Xem Ngay</a>
            </div>
            <div class="item">
                <img src="public/images/icon-wheels.png" alt="">
                <span>Bánh xe</span>
                <a class="btn" href="#">Xem Ngay</a>
            </div>
        </div>

        <!-- Featured products -->
        <div class="featured-products container-fluid">
            <div class="featured-products-title">
                <h2>SẢN PHẨM NỔI BẬT</h2>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 box-item">
                    <div class="thumnail-sp">
                        <img src="public/images/den-bi-xenon4.jpg" width="100%" alt="">
                    </div>
                    <div class="name-sp">Đèn ô tô</div>
                    <div class="price-sp">1.300.000 VNĐ</div>
                    <div class="start-sp">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i> (4)
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 box-item">
                    <div class="thumnail-sp">
                        <img src="public/images/den-bi-xenon4.jpg" width="100%" alt="">
                    </div>
                    <div class="name-sp">Đèn ô tô</div>
                    <div class="price-sp">1.300.000 VNĐ</div>
                    <div class="start-sp">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i> (4)
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 box-item">
                    <div class="thumnail-sp">
                        <img src="public/images/den-bi-xenon4.jpg" width="100%" alt="">
                    </div>
                    <div class="name-sp">Đèn ô tô</div>
                    <div class="price-sp">1.300.000 VNĐ</div>
                    <div class="start-sp">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i> (4)
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 box-item">
                    <div class="thumnail-sp">
                        <img src="public/images/den-bi-xenon4.jpg" width="100%" alt="">
                    </div>
                    <div class="name-sp">Đèn ô tô</div>
                    <div class="price-sp">1.300.000 VNĐ</div>
                    <div class="start-sp">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i> (4)
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner Quảng Cáo -->
        <div class="banner d-flex justify-content-between gap-3">
            <div>
                <img src="public/images/725x560-1.webp" width="100%" alt="">
            </div>
            <div>
                <img src="public/images/410x560.webp" width="100%" alt="">
            </div>
            <div>
                <img src="public/images/725x560-2.webp" width="100%" alt="">
            </div>
        </div>

        <!-- blog news -->
        <div class="blog-news">
            <div class="title-header">
                <h4>TIN TỨC</h4>
                <h2>BÀI VIẾT MỚI</h2>
            </div>
            <div class="blog-post d-flex row p-3">
                <div class="card col-sm-6 col-md-4 col-lg-4">
                    <div class="content-post">
                        <div class="test-img-1">
                            <img src="public/images/blog-1.jpg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="car-body-title">
                                <a class="text-test" href="#">Eyes on the road</a>
                            </div>
                            <div class="card-body-content">
                                <p>
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                            <div class="card-body-info">
                                <span class="date">
                                    04 Tháng 7 2022
                                </span>
                                <span class="sep"> | </span>
                                <span class="author">
                                    By <a href="#"> Admin</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="content-post">
                        <div class="test-img-1">
                            <img src="public/images/blog-2.jpg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="car-body-title">
                                <a href="#">Eyes on the road</a>
                            </div>
                            <div class="card-body-content">
                                <p>
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                            <div class="card-body-info">
                                <span class="date">
                                    04 Tháng 7 2022
                                </span>
                                <span class="sep"> | </span>
                                <span class="author">
                                    By <a href="#"> Admin</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-sm-6 col-md-4 col-lg-4">
                    <div class="content-post">
                        <div class="test-img-1">
                            <img src="public/images/blog-3.jpg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="car-body-title">
                                <a href="#">Eyes on the road</a>
                            </div>
                            <div class="card-body-content">
                                <p>
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                            <div class="card-body-info">
                                <span class="date">
                                    04 Tháng 7 2022
                                </span>
                                <span class="sep"> | </span>
                                <span class="author">
                                    By <a href="#"> Admin</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- subscribe -->
        <div class="subscrible p-3">
            <div class="row sub-content-g">
                <div class="col-sm-12 col-md-6 thumb-img">
                    <img src="public/images/sub.jpg" alt="">
                </div>
                <div class="sub-content col-sm-12 col-md-6">
                    <h2>
                        Subscribe newsletter & get discount of 10%
                    </h2>
                    <span>
                        to stay up-to-date on our promotions, discounts, sales, special offers and more.
                    </span>
                    <div class="btn-content">
                        <div class="input-email">
                            <input type="email" placeholder="Địa chỉ email ...">
                        </div>
                        <div class="input-button">
                            <button class="btn">Theo dõi <i class="bi bi-arrow-right-circle-fill"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- support -->
        <!-- <div class="support">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <h3>
                    WE ENDEAVOUR TO ANSWER ALL ENQUIRIES WITHIN 24 HOURS ON BUSINESS DAYS.
                </h3>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="btn" href="#">Hỗ trợ ngay</a>
            </div>
        </div>
    </div> -->

    </div>
</body>

</html>

<?php include 'body/footer.php' ?>