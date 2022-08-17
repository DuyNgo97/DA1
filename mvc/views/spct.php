<?php
if (isset($data['arrColor'])) {
    $arrColor = json_decode($data['arrColor']);
    $arrTheLoai = json_decode($data['arrTheLoai']);
    $arrloaiSPCT = json_decode($data['arrloaispct']);
    $arrComPaNy = json_decode($data['arrComPaNy']);
    $arrTrangThai = json_decode($data['arrTrangThai']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm chi tiết</title>
    <?php
    require_once 'base.php';
    ?>
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
        if (isset($data['arrSP'])) {
            $sp = json_decode($data['arrSP']);
            // var_dump($sp);
        }
        if (isset($data['check'])) {
            $check = json_decode($data['check']);
            // var_dump($check);
        }

        if (isset($data['comment'])) {
            if ($data['comment']) {
                echo "<h1 style='color: red; text-align: center;'>Thêm bình luận thành công!</h1>";
            } else {
                echo "<h1 style='color: red; text-align: center;'>Bạn chưa sở hữu sản phẩm của chúng tôi, không thể bình luận về sản phẩm này.</h1>";
            }
        }
        ?>
        <form action="cart/addToCart" method="POST" target="_self">
            <div class="main-product">
                <div class="imgs">
                    <div class="img-top">
                        <img src="./public/images/<?= $sp[0][13] ?>" alt="">
                        <input type="hidden" value="<?= $sp[0][13] ?>" name="img">
                    </div>

                    <div class="img-bot">
                        <img src="./public/images/<?= $sp[0][14] ?>" alt="">
                        <img src="./public/images/<?= $sp[0][15] ?>" alt="">
                        <img src="./public/images/<?= $sp[0][16] ?>" alt="">
                        <img src="./public/images/<?= $sp[0][17] ?>" alt="">
                    </div>
                </div>
                <div class="message">
                    <input type="hidden" value="<?= $sp[0][0] ?>" name="id">
                    <h1>
                        <?= $sp[0][1] ?>
                    </h1>
                    <input type="hidden" value="<?= $sp[0][1] ?>" name="name">
                    <div class="price-start">
                        <span class="price"><?= number_format($sp[0][2]) ?> VNĐ</span>
                        <input type="hidden" value="<?= $sp[0][2] ?>" name="price">
                        <span class="start">5 Sao</span>
                    </div>
                    <div class="noidung">
                        <p>
                            <?= $sp[0][7] ?>
                        </p>
                        <input type="hidden" value="<?= $sp[0][7] ?>" name="note">
                    </div>
                    <div class="quantity">
                        <label for="">Nhà sản xuất: </label>&ensp;
                        <h3>
                            <?= $sp[0][10] ?> </h3>
                        <input type="hidden" value="<?= $sp[0][10] ?>" name="company">
                    </div>
                    <div class="quantity">
                        <label for="">Thể loại: </label>&ensp;
                        <h3>
                            <?= $sp[0][12] ?> </h3>
                        <input type="hidden" value="<?= $sp[0][12] ?>" name="theloai">
                    </div>
                    <div class="color">
                        <label for="color">Color</label>
                        <select id="color" name="colorsp">
                            <?php
                            foreach ($arrColor as $key => $color) { ?>
                                <option style="background-color: <?= $color[1] ?>;" value="<?= $color[0] ?>">
                                    <?= $color[1] ?>
                                </option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <?php
                    if (isset($sp[0][5])) { ?>
                        <div class="quantity">
                            <label for="">Ưu đãi: </label>&ensp;
                            <h3><?= $sp[0][5] ?>%</h3>
                        </div>
                        <input type="hidden" value="<?= $sp[0][5] ?>" name="giamgia">
                    <?php }
                    ?>
                    <div class="quantity">
                        <label for="">Số lượng: </label>&ensp;
                        <input type="number" value="1">
                        <input type="hidden" value="1" name="soluong">
                    </div>
                    <div class="btnx">
                        <!-- <a href="cart" target="_self"> -->
                        <button class="btn-add" name="btn-addToCart">
                            ADD TO CART
                        </button>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
        </form>

    </div>
    <section class="comment">
        <?php
        if (isset($data['arrComment'])) {
            $arrCM = json_decode($data['arrComment']);
            // var_dump($arrCM);
        }
        ?>
        <div class="user-com">
            <div class="title-review">
                <h2>Bình luận sản phẩm</h2>
            </div>
            <div class="main-review">
                <?php
                foreach ($arrCM as $key => $cm) { ?>
                    <div class="user-review">
                        <div class="img-user">
                            <div class="img-us">
                                <img src="public/images/avatar/<?= $cm[2] ?>" alt="">
                            </div>
                            <div class="profile">
                                <div class="name">
                                    <h3><?= $cm[0] ?></h3>
                                </div>
                                <div class="vaitro">
                                    <h6><?= $cm[1] ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="message-review">
                            <p>
                                <?= $cm[3] ?>
                            </p>
                            <i><?= $cm[4] ?></i>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
            <?php
            if (isset($_SESSION['user'])) { ?>
                <form action="spct/commentSP/" method="POST" target="_self">
                    <input type="hidden" name="idUS" value="<?= $_SESSION['idUS'] ?>">
                    <input type="hidden" name="idSP" value="<?= $sp[0][0] ?>">
                    <div class="write-comment">
                        <i>Bình luận về sản phẩm này...</i>
                        <textarea name="comment" id="" cols="30" rows="10" placeholder="............"></textarea>
                        <button>Gửi</button>
                    </div>
                </form>
            <?php } else { ?>
                <div class="login">
                    <a href="login" target="_self">Đăng nhập để bình luận về sản phẩm.</a>
                </div>
            <?php }
            ?>
        </div>


    </section>
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