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
    <?php
        if(isset($data['arrCL'])){
            $arrCL = $data['arrCL'];
            // var_dump($arrCL);
        }
    ?>
    <main class="page-cart">
        <section class="shopping-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2>GIỎ HÀNG</h2>
                    <!-- <p>Mua thì mua không mua thì mua </p> -->
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <form action="cart/addToCart" method="POST" target="_self">

                                <div class="items">
                                    <?php
                                if(@$_SESSION['cart']){
                                    $cart = $_SESSION['cart'];
                                    // var_dump($cart);
                                    $total = 0;
                                    foreach ($_SESSION['cart'] as $key => $cart) { 
                                        $total += ($cart['price'] * $cart['quantity']);
                                        $vanchuyen = 8000000;
                                        ?>
                                    <button type="submit" class="delete mt-2 btn btn-danger" name="btn-capnhat">
                                        Cập nhật</button>
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="img-fluid mx-auto d-block image"
                                                    src="public/images/<?= $cart['img'] ?>">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="col-md-5 product-name">
                                                            <div class="product-name">
                                                                <a href="#"><?= $cart['name'] ?></a>
                                                                <div class="product-info">
                                                                    <div><b>Hãng</b> : <span
                                                                            class="value"><?= $cart['company'] ?></span>
                                                                    </div>
                                                                    <?php
                                                                foreach ($arrCL as $keycl => $cl) {
                                                                    if($cl[0] == $cart['color']){ ?>
                                                                    <div><b>Màu sắc</b> : <span
                                                                            class="value"><?= $cl[1] ?></span>
                                                                    </div>
                                                                    <?php }
                                                                }
                                                                ?>
                                                                    <input id="quantity" type="hidden"
                                                                        name="color[<?= $cart['id'] ?>]"
                                                                        value="<?= $cart['color'] ?>"
                                                                        class="form-control quantity-input">
                                                                    <div><b>Ưu đãi</b> : <span
                                                                            class="value"><?= $cart['giamgia'] ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 quantity">
                                                            <label for="quantity">Số lượng:</label>
                                                            <input id="quantity" type="number"
                                                                name="sl[<?= $cart['id'] ?>]"
                                                                value="<?= $cart['quantity'] ?>"
                                                                class="form-control quantity-input">
                                                            <a href="cart/deleteCart/<?= $cart['id'] ?>/<?= $cart['color'] ?>"
                                                                target="_self"><button type="button"
                                                                    class="delete mt-2 btn btn-danger">
                                                                    Xóa</button></a>
                                                            <button type="submit" style="display: none;"
                                                                class="delete mt-2 btn btn-danger" name="btn-capnhat">
                                                                Cập nhật</button>
                                                        </div>
                                                        <div class="col-md-2 price">
                                                            <label for="quantity">Giá:</label><br>
                                                            <span><?= $cart['price'] ?></span>
                                                        </div>
                                                        <div class="col-md-2 price">
                                                            <label for="quantity">Thành tiền:</label><br>
                                                            <span><?= $cart['price'] * $cart['quantity'] * (1 - $cart['giamgia'])?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}else{ ?>
                                    <img src="public/images/noncart.png" alt="">
                                    <img src="public/images/chambien2.jpg" class="chambien" alt="">
                                    <?php }
                                ?>
                                    <!-- } ?> -->

                                </div>
                            </form>
                        </div>
                        <?php 
                            if(isset($_SESSION['cart'])){ ?>
                        <div class="summary-main col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Tổng thanh toán</h3>
                                <div class="summary-item"><span class="text">Tổng phụ</span><span
                                        class="price"><?= @$total ?> VND</span></div>
                                <!-- <div class="summary-item"><span class="text">Giảm giá</span><span
                                        class="price"><?= @$total *  @$_SESSION['cart']['giamgia']?>
                                        VND</span></div> -->
                                <div class="summary-item"><span class="text">Phí vận chuyển</span><span class="price">
                                        <?= @$vanchuyen ?>VND
                                    </span></div>
                                <div class="summary-item"><span class="text">Tổng cộng</span><span
                                        class="price"><?= (@$total - (@$total *  @$cart['giamgia']) - @$vanchuyen) ?>
                                        VND</span></div>
                                <div class="btn-b">
                                    <a href="checkout" target="_self"><button type="button"
                                            class="btn btn-primary btn-lg btn-block" style="background-color:#198754 ;">
                                            Thanh toán</button></a>
                                </div>
                            </div>
                        </div>
                        <?php }
                        ?>
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