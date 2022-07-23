<?php
if (isset($data['sanpham'])) {
    $sanpham = json_decode($data['sanpham']);
    // var_dump($sanpham);
?>
    <?php
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
                    <img class="mw-100" src="public/images/<?= $sp[15] ?>" alt="">
                </div>
                <div class="mb-2 mt-2">
                    <div class="product-name">
                        <a class="fs-5" href="spct" target="_self">
                            Đèn xe cao cấp loại 1
                        </a>
                    </div>
                    <div class="product-cate">
                        <span>Đèn xe</span>
                    </div>
                    <div class="product-price">
                        Giá: <span>2.000.000đ</span>
                    </div>
                    <div class="product-nsx">
                        <Span>Hãng: ABC</Span>
                    </div>
                    <div class="product-info">
                        Mô tả:
                        <Span>
                            Đèn xe cao cấp đèn xe cao cấp đèn xe cao cấp
                        </Span>
                    </div>
                </div>
                <div class="product-btn d-flex justify-content-around">
                    <a class="btn buy fs-4" href="cart" target="_self">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a class="btn follow fs-4" href="#">
                        <i class="bi bi-suit-heart-fill"></i>
                    </a>
                    <a class="btn view fs-4" href="spct" target="_self">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
<?php  } ?>