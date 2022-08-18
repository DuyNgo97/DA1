<?php
if (isset($data['sanpham'])) {
    $sanpham = json_decode($data['sanpham']);
    // var_dump($sanpham);
    foreach ($sanpham as $key => $sp) { ?>
        <div class="product-item card-pd col-6 col-md-6 col-lg-4 text-center">
            <div class="item-info mb-3 p-2 border-s position-relative">
                <!-- Không được xoá đoạn code comment dưới này !!! -->
                <!-- <div class="tag-item position-absolute top-5 start-10">
                    <div class="discout-item mb-1">
                        <span> - 10% </span>
                    </div>
                    <div class="new-item mb-1">
                        <span> Mới </span>
                    </div>
                </div> -->
                <div class="img-thumbnail">
                    <img class="mw-100" height="100%" src="public/images/<?= $sp[16] ?>" alt="">
                </div>
                <div class="mb-2 mt-2">
                    <div class="product-name">
                        <a class="fs-5" href="spct/sayhi/<?= $sp[0] ?>" target="_self">
                            <?= $sp[1] ?>
                        </a>
                    </div>
                    <div class="product-cate">
                        <span><?= $sp[18] ?></span>
                    </div>
                    <div class="product-price">
                        Giá: <span> <?= number_format($sp[2]) ?> VND </span>
                    </div>
                    <div class="product-nsx">
                        <Span><?= $sp[20] ?></Span>
                    </div>
                    <div class="product-info">
                        Mô tả:
                        <Span>
                            <?= $sp[7] ?>
                        </Span>
                    </div>
                </div>
                <div class="product-btn d-flex justify-content-around">
                    <a class="btn buy fs-4" href="cart/addToCart2/<?= $sp[0] ?>" target="_self">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a class="btn follow fs-4" href="#">
                        <i class="bi bi-suit-heart-fill"></i>
                    </a>
                    <a class="btn view fs-4" href="spct/sayhi/<?= $sp[0] ?>" target="_self">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php }
} else if (isset($data['arrallsp'])) {
    $spall = json_decode($data['arrallsp']);
    // var_dump($spall);
    foreach ($spall as $key => $sp) { ?>
        <div class="product-item card-pd col-6 col-md-6 col-lg-4 text-center">
            <div class="item-info mb-3 p-2 border-s position-relative">
                <!-- Không được xoá đoạn code comment dưới này !!! -->
                <!-- <div class="tag-item position-absolute top-5 start-10">
                                        <div class="discout-item mb-1">
                                            <span> - 10% </span>
                                        </div>
                                        <div class="new-item mb-1">
                                            <span> Mới </span>
                                        </div>
                                    </div> -->
                <div class="img-thumbnail">
                    <img class="mw-100" height="100%" src="public/images/<?= $sp[16] ?>" alt="">
                </div>
                <div class="mb-2 mt-2">
                    <div class="product-name">
                        <a class="fs-5" href="spct/sayhi/<?= $sp[0] ?>" target="_self">
                            <?= $sp[1] ?>
                        </a>
                    </div>
                    <div class="product-cate">
                        <span>
                            <?= $sp[18] ?>
                        </span>
                    </div>
                    <div class="product-price">
                        Giá: <span>
                            <?= number_format($sp[2]) ?>
                        </span> VND
                    </div>
                    <div class="product-nsx">
                        <Span>Hãng: <?= $sp[20] ?></Span>
                    </div>
                    <div class="product-info">
                        Mô tả:
                        <Span>
                            <?= $sp[7] ?>
                        </Span>
                    </div>
                </div>
                <div class="product-btn d-flex justify-content-around">
                    <a class="btn buy fs-4" href="cart/addToCart2/<?= $sp[0] ?>" target="_self">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a class="btn follow fs-4" href="#">
                        <i class="bi bi-suit-heart-fill"></i>
                    </a>
                    <a class="btn view fs-4" href="spct/sayhi/<?= $sp[0] ?>" target="_self">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
<?php  } ?>