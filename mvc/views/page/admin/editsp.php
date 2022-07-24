<style>
h1 {
    font-size: 20px;
    color: white;
    text-transform: uppercase;
    font-weight: 600;
    text-align: center;
    /* margin-bottom: 15px; */
}

table {
    width: 80%;
    table-layout: fixed;
    margin-left: 10%;

}

.tbl-header {
    display: flex;
    height: 50px;
    background-color: #25c481;
    align-items: center;
    justify-content: center;
}

.tbl-header1 {
    margin-top: 50px;
    width: 300px;
    display: flex;
    height: 50px;
    background-color: #25c481;
    align-items: center;
    justify-content: center;
}

.tbl-content {
    /* height: 300px; */
    overflow-x: auto;
    margin-top: 0px;
    border: 1px solid #25c481;
    padding: 25px 0;
    background: linear-gradient(to right, #25c481, #25b7c4);
    ;
}

.tbl-content1 {
    /* height: 200px; */
    /* width: 300px; */
    overflow-x: auto;
    margin-top: 0px;
    border: 1px solid #25c481;
    padding: 25px 0;
    background: linear-gradient(to right, #25c481, #25b7c4);
    ;
}

tr {
    margin: 25px 0;
    background-color: #fff;
    position: relative;
}

.fail {
    color: white;
    background-color: red;
    transition: all 0.8s;
}

.fail th:hover {
    background-color: white;
    transition: all 0.8s;
}

.fail th:hover a {
    color: red;
    transition: all 0.8s;
}

.normal {
    color: black;
    background-color: #fff;
    transition: all 0.8s;
}

.normal a {
    color: black;
    transition: all 0.8s;
}

.normal th:hover {
    background-color: #25c481;
    transition: all 0.8s;
}

.normal th:hover a {
    color: #fff;
}

.change {
    margin-left: 90px;
    margin-bottom: 20px;
}

m tr:hover .edit:nth-child(1) {
    display: flex;
    align-items: center;
    justify-content: center;
    /* right: 5px; */

}

tr:hover .edit:nth-child(2) {
    display: flex;
    align-items: center;
    justify-content: center;
}

a {
    color: #fff;
    text-decoration: none;
    text-align: center;
}

.edit {

    position: absolute;
    height: 90%;
    width: 100px;
    margin-top: 3px;
    display: none;
    /* display: flex; */
}

.btn-edit {
    height: 35px;
    width: 100px;
    background-color: #25c481;
    border: none;
    box-shadow: 0 0 10px #25b7c4;
    margin-left: 40%;
    margin-top: 25px;
    margin-bottom: 25px;
    transition: all 1s;
    text-transform: uppercase;
}

.btn-edit:hover {
    margin-left: 38%;
    width: 120px;
    font-size: 16px;
    background-color: white;
    color: #25c481;
    box-shadow: 0 0 20px #25c481;
}



.edit:nth-child(1) {
    top: 0;
    right: 0px;
    background-color: #25c481;
}

.edit:nth-child(1):hover {
    background-color: red;
}

.edit:nth-child(2):hover {
    background-color: red;
}

.edit:nth-child(2) {
    top: 0;
    left: 5px;
    background-color: #25b7c4;
}

th {
    padding: 15px 15px;
    text-align: center;
    font-weight: 500;
    font-size: 16px;
    color: black;
    text-transform: uppercase;
    /* border: 1px solid #25c481; */

}

td {
    padding: 15px;
    text-align: left;
    vertical-align: middle;
    font-weight: 300;
    font-size: 12px;
    color: black;
    border-bottom: solid 1px #25c481;

}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

body {
    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);
    font-family: 'Roboto', sans-serif;
}

section {
    margin: 50px;
}

.add-danhmuc {
    height: 100%;
    width: 80%;
    background-color: white;
    box-sizing: border-box;
    padding-top: 25px;
    margin-left: 10%;
    padding-left: 5%;
    /* padding-left: 10%; */
}

.add-danhmuc input {
    height: 30px;
    width: 80%;
    margin-left: 10%;
    margin-top: 1%;
    margin-bottom: 1%;
}

.add-form1 {
    height: 25px;
    width: 80px;
    margin-top: 10px;
    margin-left: 35%;
    background-color: #25c481;
}

.title {
    font-size: 25px;
    color: #25c481;
    margin: 50px;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
</style>
<div class="main">
    <?php
        if(isset($data['sanpham'])){
            $sp = json_decode($data['sanpham']);
            // if($sp[0][3] == 'DEFAULT'){
            //     $sp[0][3] = '6';
            // }
            $arrIMGold = array();
            $arrIMGold[] = $sp[0][13];
            $arrIMGold[] = $sp[0][14];
            $arrIMGold[] = $sp[0][15];
            $arrIMGold[] = $sp[0][16];
            $arrIMGold[] = $sp[0][17];
            // var_dump($arrIMGold);
            $_SESSION['abc'] = serialize($arrIMGold);
            // var_dump($sp);
        }
        if(isset($data['arrIMG'])){
            // var_dump($data['arrIMG']);
            unset($_SESSION['abc']);
            // var_dump($_SESSION);
        }

        if(isset($data['test'])){
            // var_dump($data['test']);
        }
    ?>
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
    <section>
        <?php
            if(isset($data['check'])){
                if($data['check']){
                    echo "<script>
                    alert('Update thanh cong');
                    window.location='admin/sanpham';
                    </script>";
                }else{
                    echo "<script>
                    alert('Update khong thanh cong');
                    window.location='admin/sanpham';
                    </script>";
                }
            }
        ?>
        <div class="tbl-header1">
            <h1>Cập nhật sản phẩm </h1>
        </div>
        <div class="tbl-content1">
            <form action="admin/resultEditSP/<?=$sp[0][0]?>" enctype="multipart/form-data" class="add-danhmuc"
                method="POST" target="_self">
                <label for="">ID sản phẩm</label><br>
                <input type="text" name="idsp" disabled value="<?= $sp[0][0] ?>"><br><br>
                <label for="">Tên sản phẩm</label><br>
                <input type="text" name="namesp" value="<?= $sp[0][1] ?>"><br><br>
                <label for="">Giá sản phẩm</label><br>
                <input type="text" name="giasp" value="<?= $sp[0][2] ?>"><br><br>
                <label for="">Màu sắc sản phẩm</label><br>
                <input type="text" class="colorSP" style="background-color: <?= $sp[0][3] ?>;" name="color"
                    value="<?= $sp[0][3] ?>"><br><br>
                <div class="change">
                    <label for="color">--></label>
                    <select id="color" name="colorsp">
                        <?php
                                        foreach ($arrColor as $key => $color) { ?>
                        <option style="background-color: <?= $color[1] ?>;" value="<?= $color[0] ?>"><?= $color[1] ?>
                        </option>
                        <?php }
                                    ?>
                    </select>
                </div>
                <label for="">Số lượng sản phẩm</label><br>
                <input type="text" name="soluongsp" value="<?= $sp[0][4] ?>"><br><br>
                <label for="">Mức giảm giá</label><br>
                <input type="text" name="giamgia" value="<?= $sp[0][5] ?>"><br><br>
                <label for="">Trạng thái sản phẩm</label><br>
                <input type="text" name="trangthai" value="<?= $sp[0][6] ?>"><br><br>
                <div class="change">
                    <label for="loaisp">--></label>
                    <select id="loaisp" name="trangthaisp">
                        <?php
                                        foreach ($arrTrangThai as $key => $color) { ?>
                        <option value="<?= $color[0] ?>"><?= $color[1] ?></option>
                        <?php }
                                    ?>
                    </select>
                </div>
                <label for="">Ngày tạo</label><br>
                <input type="date" name="date-tao" value="<?= $sp[0][8] ?>" disabled><br><br>
                <label for="">Ngày cập nhật</label><br>
                <div id="today"></div>
                <!-- <input type="date" name="date-capnhat"><br><br> -->
                <label for="">Tên công ty</label><br>
                <input type="text" name="congty" value="<?= $sp[0][10] ?>"><br><br>
                <div class="change">
                    <label for="loaisp">--></label>
                    <select id="loaisp" name="company">
                        <?php
                                        foreach ($arrComPaNy as $key => $color) { ?>
                        <option value="<?= $color[0] ?>"><?= $color[1] ?></option>
                        <?php }
                                    ?>
                    </select>
                </div>
                <label for="">Loại sản phẩm</label><br>
                <input type="text" name="tlsp" value="<?= $sp[0][11] ?>"><br><br>
                <div class="change">
                    <label for="loaisp">--></label>
                    <select id="loaisp" name="theloaisp">
                        <?php
                                        foreach ($arrTheLoai as $key => $color) { ?>
                        <option value="<?= $color[0] ?>"><?= $color[1] ?></option>
                        <?php }
                                    ?>
                    </select>
                </div>
                <label for="">Chi tiết</label><br>
                <input type="text" name="chitiet" value="<?= $sp[0][12] ?>"><br><br>
                <div class="change">
                    <label for="loaisp">--></label>
                    <select id="loaisp" name="chitietsp">
                        <?php
                                        foreach ($arrloaiSPCT as $key => $color) { ?>
                        <option value="<?= $color[0] ?>"><?= $color[1] ?></option>
                        <?php }
                                    ?>
                    </select>
                </div>
                <!-- <button name="btn-add" class="add-form1">Thêm</button> -->
                <label for="">Hình ảnh cũ</label><br>
                <img src="public/images/<?= $sp[0][13] ?>" width="250px" height="100px" alt="">
                <img src="public/images/<?= $sp[0][14] ?>" width="250px" height="100px" alt="">
                <img src="public/images/<?= $sp[0][15] ?>" width="250px" height="100px" alt="">
                <img src="public/images/<?= $sp[0][16] ?>" width="250px" height="100px" alt="">
                <img src="public/images/<?= $sp[0][17] ?>" width="250px" height="100px" alt="">
                <br>
                <label for="">Hình ảnh mới</label>
                <div class="imgs" style="display: flex; flex-wrap: wrap;">
                    <div class="imgOne" style="display: flex; flex-direction: column;">
                        <div class="img_upp" width="250px" height="100px">
                        </div>
                        <div class="field">

                            <input type="file" class="imgPre" name="image" onchange="preimg()" placeholder="ImageMain">

                        </div>
                    </div>
                    <div class="imgOne" style="display: flex; flex-direction: column;">
                        <div class="img_upp1" width="250px" height="100px"></div>
                        <div class="field">
                            <input type="file" class="imgPre1" name="image1" onchange="preimg1()" placeholder="Image1">

                        </div>
                    </div>
                    <div class="imgOne" style="display: flex; flex-direction: column;">
                        <div class="img_upp2" width="250px" height="100px"></div>
                        <div class="field">
                            <input type="file" class="imgPre2" name="image2" placeholder="Image2" onchange="preimg2()">

                        </div>

                    </div>
                    <div class="imgOne" style="display: flex; flex-direction: column;">
                        <div class="imgOne" style="display: flex; flex-direction: column;">
                            <div class="field">
                                <div class="img_upp3" width="250px" height="100px"></div>
                                <input type="file" class="imgPre3" name="image3" placeholder="Image3"
                                    onchange="preimg3()">

                            </div>
                        </div>
                    </div>
                    <div class="imgOne" style="display: flex; flex-direction: column;">
                        <div class="field">
                            <div class="img_upp4" width="250px" height="100px"></div>
                            <input type="file" class="imgPre4" name="image4" placeholder="Image4" onchange="preimg4()">

                        </div>
                    </div>
                    <div class="data status"><a class="data-list">Mô tả</a></div>

                </div>
                <input type="text" name="idImgOld" value="<?= $sp[0][18] ?>" style="display: none;"><br><br>
                <div class="message">
                    <label for="">Mô tả</label><br>
                    <textarea placeholder="Description" name="mota" rows="4" cols="50"><?= $sp[0][7] ?></textarea>
                </div>
                <button class=" btn-edit" name="btn-edit">Cập
                    nhật</button>
            </form>

        </div>
    </section>
</div>