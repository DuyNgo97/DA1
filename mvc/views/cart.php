<!DOCTYPE html>
<html>

<head>
    <title>Giỏ hàng </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=" https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <base href="http://localhost/da1/" target="_blank">
    <link rel="icon" href="public/images/logo.png">
    <!-- Boostrap -->
    <link rel="stylesheet" type="text/css" href="public/css/main.css">


    <!-- Boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <?php
    require_once 'mvc/views/body/header.php'
    ?>
    <main class="page-cart">
        <section class="shopping-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2>GIỎ HÀNG</h2>
                    <p>Mua thì mua không mua thì mua </p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <!-- Php show sản phẩm giỏ hàng -->
                            <?php require_once "mvc/views/page/cart/" . $data["viewpart"] . ".php" ?>
                        </div>
                        <div class="summary-main col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Tổng thanh toán</h3>
                                <div class="summary-item"><span class="text">Tổng phụ</span><span class="price">15.000.000.000 VND</span></div>
                                <div class="summary-item"><span class="text">Giảm giá</span><span class="price">0
                                        VND</span></div>
                                <div class="summary-item"><span class="text">Phí vận chuyển</span><span class="price">2.000.000.000 VND</span></div>
                                <div class="summary-item"><span class="text">Tổng cộng</span><span class="price">17.000.000.000 VND</span></div>
                                <div class="btn-b">
                                    <a href="checkout" target="_self"><button type="button" class="btn btn-primary btn-lg btn-block" style="background-color:#198754 ;">
                                            Thanh toán</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<?php
include 'body/footer.php';
?>

</html>