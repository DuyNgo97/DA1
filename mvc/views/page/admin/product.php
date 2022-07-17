<div class="main">
    <?php
            if(isset($data["arrSP"])){
                $arr = json_decode($data["arrSP"]);
                // var_dump($arr);
            }
            ?>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>



            <!--<img src="images/profile.jpg" alt="">-->
        </div>



        <div class="dash-content" id="product">


            <div class="activity">
                <div class="title">
                    <i class='bx bx-box'></i>
                    <span class="text">Product</span>
                </div>
                <?php
                    foreach ($arr as $key => $a) { ?>
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title" style="width: 120px;text-align: center;">ID</span>
                        <span class="data-list data__list-style-name"><?= $a[0] ?></span>
                    </div>
                    <div class="data email">
                        <span class="data-title " style="width: 200px; text-align: center;">Tên sản phẩm</span>
                        <span class="data-list data__list-style-name"><?= $a[1] ?></span>
                    </div>
                    <div class="data data joined">
                        <span class="data-title" style="text-align: center;">Hình</span>
                        <span class="data-list data__list-style-image"><img style="width: 42px;
                            height: 42px;
                            margin: 12px;
                            border: 1px solid #9999;" src="public/images/<?= $a[13] ?>" alt=""></span>
                    </div>
                    <div class="data data joined">
                        <span class="data-title" style="text-align: center;">Image1</span>
                        <span class="data-list data__list-style-image"><img style="width: 42px;
                            height: 42px;
                            margin: 12px;
                            border: 1px solid #9999;" src="public/images/<?= $a[14] ?>" alt=""></span>
                    </div>
                    <div class="data type">
                        <span class="data-title" style="text-align: center;">Image2</span>
                        <span class="data-list data__list-style-image"><img style="width: 42px;
                            height: 42px;
                            margin: 12px;
                            border: 1px solid #9999;" src="public/images/<?= $a[15] ?>" alt=""></span>
                    </div>
                    <div class="data status">
                        <span class="data-title" style="text-align: center;">Image3</span>
                        <span class="data-list data__list-style-image"><img style="width: 42px;
                            height: 42px;
                            margin: 12px;
                            border: 1px solid #9999;" src="public/images/<?= $a[16] ?>" alt=""></span>
                    </div>
                    <div class="data status">
                        <span class="data-title" style="text-align: center;">Image4</span>
                        <span class="data-list data__list-style-image"><img style="width: 42px;
                            height: 42px;
                            margin: 12px;
                            border: 1px solid #9999;" src="public/images/<?= $a[17] ?>" alt=""></span>
                    </div>
                    <div class="data status">
                        <span class="data-title" style="width: 100px;text-align: center;">Color</span>
                        <span class="data-list data__list-style-name"><?= $a[3] ?></span>
                    </div>
                    <div class="data status">
                        <span class="data-title" style="text-align: center;">Giá tiền</span>
                        <span class="data-list data__list-style-name"><?= $a[2] ?></span>
                    </div>
                    <div class="data status">
                        <span class="data-title" style="width: 100px;text-align: center;">Số lượng</span>
                        <span class="data-list data__list-style-name"><?= $a[4] ?></span>
                    </div>
                    <div class="data status">
                        <span class="data-title" style="width: 200px;text-align: center;">Nhà sản xuất</span>
                        <span class="data-list data__list-style-name"><?= $a[10] ?></span>
                    </div>
                    <div class="data status">
                        <span class="data-title" style="width: 300px; overflow: auto; text-align: center;">Mô tả</span>
                        <span class="data-list data__list-style-name"><?= $a[7] ?></span>
                    </div>
                    <div class="data status" style="width: 100px;">
                        <?php
                            if($a[6] == 'Còn hàng'){
                                $trangthai = 'Green';
                            }else{
                                $trangthai = 'Red';
                            }
                        ?>
                        <span class="data-title" style="text-align: center;">Trạng thái</span>
                        <span class="data-list data__list-style-name"
                            style="color: <?= $trangthai ?>;"><?= $a[6] ?></span>
                    </div>
                    <div class="data status" style="width: 100px;">
                        <span class="data-title" style="text-align: center;">Thể loại</span>
                        <span class="data-list data__list-style-name"><?= $a[11] ?></span>
                    </div>
                    <div class="data status" style="width: 150px;">
                        <span class="data-title" style="text-align: center;">Mẫu mã</span>
                        <span class="data-list data__list-style-name"><?= $a[12] ?></span>
                    </div>
                    <div class="data status" style="width: 100px;">
                        <span class="data-title" style="text-align: center;">Edit</span>
                        <span class="data-list data__list-style-name"><button>Sửa</button></span>
                    </div>
                    <div class="data status" style="width: 100px;">
                        <span class="data-title" style="text-align: center;">Delete</span>
                        <span class="data-list data__list-style-name"><button>Xoá</button></span>
                    </div>
                </div>
                <?php }
                ?>

            </div>



    </section>
</div>