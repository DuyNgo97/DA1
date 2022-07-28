<?php 
    if(isset($data['hangxe'])){ 
        $arrHX = json_decode($data['hangxe']);
        // var_dump($arrHX);
    }
?>
    <div class="row">
<?php              
        if(is_array($arrHX) || is_object($arrHX)){       
            foreach($arrHX as $key => $hx){ ?>
            <!-- item -->
            
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
                            <img class="mw-100" height="" src="public/images/<?= $hx[16] ?>" alt="">
                        </div>
                        <div class="mb-2 mt-2">
                            <div class="product-name">
                                <a class="fs-5" href="spct" target="_self">
                                    <?= $hx[1] ?>
                                </a>
                            </div>
                            <div class="product-cate">
                                <span><?= $hx[18] ?></span>
                            </div>
                            <div class="product-price">
                                Giá: <span><?= $hx[2] ?></span>
                            </div>
                            <div class="product-nsx">
                                <Span><?= $hx[17] ?></Span>
                            </div>
                            <div class="product-info">
                                Mô tả:
                                <Span>
                                <?= $hx[7] ?>
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
            
            <!-- end item -->
    <?php     
            }
        }
?>
    </div>
    