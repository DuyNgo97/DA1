<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm chi tiết</title>
    <base href="http://localhost/da1/" target="_blank">
    <link rel="icon" href="public/images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">

    <!-- Boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <?php
        require_once './mvc/views/body/header.php';
        ?>
    <div class="container1">
        <?php
            if(isset($data['arrSP'])){
                $sp = json_decode($data['arrSP']);
                // var_dump($sp);
            }
            if(isset($data['check'])){
                $check = json_decode($data['check']);
                // var_dump($check);
            }
        ?>
        <div class="main-product">
            <div class="imgs">
                <div class="img-top">
                    <img src="./public/images/<?= $sp[0][13] ?>" alt="">
                </div>

                <div class="img-bot">
                    <img src="./public/images/<?= $sp[0][14] ?>" alt="">
                    <img src="./public/images/<?= $sp[0][15] ?>" alt="">
                    <img src="./public/images/<?= $sp[0][16] ?>" alt="">
                    <img src="./public/images/<?= $sp[0][17] ?>" alt="">
                </div>
            </div>
            <div class="message">
                <h1>
                    <?= $sp[0][1] ?>
                </h1>
                <div class="price-start">
                    <span class="price"><?= $sp[0][2] ?> VNĐ</span>
                    <span class="start">5 Sao</span>
                </div>
                <div class="noidung">
                    <p>
                        <?= $sp[0][7] ?>
                    </p>
                </div>
                <div class="quantity">
                    <label for="">Nhà sản xuất: </label>&ensp;
                    <h3>
                        <?= $sp[0][10] ?> </h3>
                </div>
                <div class="color">
                    <label for="">Color: </label>&ensp;
                    <input type="radio"> <span>black</span> &emsp;
                    <input type="radio"> <span>red</span>&emsp;
                    <input type="radio"> <span>yellow</span>&emsp;
                    <input type="radio"> <span>pink</span>
                </div>
                <div class="size">
                    <label for="">Size: </label>&ensp;
                    <input type="checkbox" value=""> <span>17 x 9</span> &emsp;
                    <input type="checkbox" value=""> <span>18 x 10</span> &emsp;
                    <input type="checkbox" value=""> <span>19 x 9</span> &emsp; &emsp; &emsp; &emsp; &ensp;
                    &emsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" value=""> <span>20 x 10</span> &emsp;
                </div>
                <div class="quantity">
                    <label for="">Số lượng: </label>&ensp;
                    <input type="number" value="1">
                </div>
                <div class="btnx">
                    <a href="cart" target="_self">
                        <button class="btn-add">
                            ADD TO CART
                        </button>
                    </a>
                </div>
            </div>
        </div>


    </div>
    <div class="product-tt">
        <div class="row">
            <div class="title">
                <p>Có thể bạn quan tâm</p>
                <h1>SẢN PHẨM TƯƠNG TỰ</h1>
            </div>
        </div>
        <div class="product-tt-main">
            <div class="wrap">
                <div class="change next" onclick="next()">Next</div>
                <div class="change back" onclick="back()">Back</div>
                <div class="slideshow">
                    <?php
                        foreach ($check as $key => $ck) { ?>
                    <form action="spct/sayhi/<?= $ck[3] ?>" method="POST" target="_self">
                        <div class="product">
                            <div class="img">
                                <img src="public/images/<?= $ck[1] ?>" alt="">
                            </div>
                            <div class="mess-product">
                                <h5><?= $ck[2] ?></h5>
                                <p>Giá: <span><?= $ck[0] ?></span> VNĐ</p>
                                <button>Xem thêm</button>
                            </div>
                        </div>
                    </form>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        require_once './mvc/views/body/footer.php';
    ?>
</body>
<script src="public/js/slideshowSPCT.js"></script>

</html>