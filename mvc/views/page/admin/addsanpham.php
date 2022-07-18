<div class="main">
    <?php
    if(isset($data['arrColor'])){
        $arrColor = json_decode($data['arrColor']);
        $arrTheLoai = json_decode($data['arrTheLoai']);
        $arrloaiSPCT = json_decode($data['arrloaispct']);
        $arrComPaNy = json_decode($data['arrComPaNy']);
        $arrTrangThai = json_decode($data['arrTrangThai']);
    }
                // var_dump(json_decode($data['arrColor']));
            ?>
    <div class="activity2">
        <div class="title">
            <i class='bx bxl-dropbox'></i>
            <h1>Thêm sản phẩm</h1>
        </div>
        <?php
            if(isset($data['check'])){
                if(!$data['check']){
                    echo '<h1>File đã tồn tại!!!</h1>';
                }else{
                    echo '<h1>Thêm sản phẩm thành công</h1>';
                    // echo $data['check'];
                }
            }
        ?>
        <div class="activity-data">
            <form action="admin/resultAddsanpham" target="_self" method="POST" enctype="multipart/form-data">
                <div class="colum-big">
                    <div class="colum-pro">
                        <div class="data status"><a class="data-list">Tên sản phẩm</a></div>
                        <div class="dbl-field">
                            <div class="field">
                                <input type="text" name="tensp" placeholder="Tên sản phẩm">
                                <!-- <i class='fas fa-envelope'></i> -->
                            </div>
                        </div>
                        <div class="data status"><a class="data-list">Color</a></div>
                        <div class="dbl-field">
                            <div class="field">
                                <label for="color"></label>
                                <select id="color" name="colorsp">
                                    <?php
                                        foreach ($arrColor as $key => $color) { ?>
                                    <option value="<?= $color[0] ?>"><?= $color[1] ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="data status"><a class="data-list">Giá</a></div>
                        <div class="dbl-field">
                            <div class="field">
                                <input type="text" name="giasp" placeholder="Giá">

                            </div>
                        </div>
                        <div class="data status"><a class="data-list">Nhà sản xuất</a></div>
                        <div class="dbl-field">
                            <label for="loaisp"></label>
                            <select id="loaisp" name="company">
                                <?php
                                        foreach ($arrComPaNy as $key => $color) { ?>
                                <option value="<?= $color[0] ?>"><?= $color[1] ?></option>
                                <?php }
                                    ?>
                            </select>
                        </div>
                        <div class="data status"><a class="data-list">Trạng thái sản phẩm</a></div>
                        <div class="dbl-field">
                            <label for="loaisp"></label>
                            <select id="loaisp" name="trangthaisp">
                                <?php
                                        foreach ($arrTrangThai as $key => $color) { ?>
                                <option value="<?= $color[0] ?>"><?= $color[1] ?></option>
                                <?php }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="colum-pro">
                        <div class="data status"><a class="data-list">Hình sản phẩm</a></div>
                        <div class="dbl-field">
                            <div class="img_upp" width="250px" height="100px"></div>
                            <!-- <img src="public/images/410x560.webp" width="200px" height="100px" class="upimg" alt=""> -->
                            <div class="field">

                                <input type="file" class="imgPre" name="image" onchange="preimg()"
                                    placeholder="ImageMain">

                            </div>
                        </div>
                        <div class="data status"><a class="data-list">Image1</a></div>
                        <div class="dbl-field">
                            <div class="img_upp1" width="250px" height="100px"></div>
                            <div class="field">
                                <input type="file" class="imgPre1" name="image1" onchange="preimg1()"
                                    placeholder="Image1">

                            </div>
                        </div>
                        <div class="data status"><a class="data-list">Image2</a></div>
                        <div class="dbl-field">
                            <div class="img_upp2" width="250px" height="100px"></div>
                            <div class="field">
                                <input type="file" class="imgPre2" name="image2" placeholder="Image2"
                                    onchange="preimg2()">

                            </div>
                        </div>
                        <div class="data status"><a class="data-list">Image3</a></div>
                        <div class="dbl-field">
                            <div class="field">
                                <div class="img_upp3" width="250px" height="100px"></div>
                                <input type="file" class="imgPre3" name="image3" placeholder="Image3"
                                    onchange="preimg3()">

                            </div>
                        </div>
                        <div class="data status"><a class="data-list">Image4</a></div>
                        <div class="dbl-field">
                            <div class="field">
                                <div class="img_upp4" width="250px" height="100px"></div>
                                <input type="file" class="imgPre4" name="image4" placeholder="Image4"
                                    onchange="preimg4()">

                            </div>
                        </div>
                    </div>
                    <div class="colum-pro">
                        <div class="data status"><a class="data-list">Số lượng</a></div>
                        <div class="dbl-field">
                            <div class="field">
                                <input type="text" name="soluongsp" placeholder="50">

                            </div>
                        </div>
                        <div class="data status"><a class="data-list">Giảm giá</a></div>
                        <div class="dbl-field">
                            <div class="field">
                                <input type="text" name="giamgiasp" value="0">

                            </div>
                        </div>
                        <div class="data status"><a class="data-list">Thể loại</a></div>
                        <div class="dbl-field">
                            <label for="loaisp"></label>
                            <select id="loaisp" name="theloaisp">
                                <?php
                                        foreach ($arrTheLoai as $key => $color) { ?>
                                <option value="<?= $color[0] ?>"><?= $color[1] ?></option>
                                <?php }
                                    ?>
                            </select>
                        </div>
                        <div class="data status"><a class="data-list">Thể loại chi tiết</a></div>
                        <div class="dbl-field">
                            <label for="loaisp"></label>
                            <select id="loaisp" name="chitietsp">
                                <?php
                                        foreach ($arrloaiSPCT as $key => $color) { ?>
                                <option value="<?= $color[0] ?>"><?= $color[1] ?></option>
                                <?php }
                                    ?>
                            </select>
                        </div>
                        <div class="data status"><a class="data-list">Ngày tạo</a></div>
                        <div class="dbl-field">
                            <div class="field">
                                <div id="today"></div>

                            </div>
                        </div>
                    </div>
                    <div class="colum-pro">
                        <div class="data status"><a class="data-list">Mô tả</a></div>
                        <div class="message">
                            <textarea placeholder="Description" name="mota" rows="4" cols="50"></textarea>
                        </div>
                    </div>
                    <div>

                    </div>
                    <div class="button-area">
                        <button type="submit" name="btn-addsp">Thêm</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>