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
    width: 90%;
    table-layout: fixed;
    margin-left: 5%;

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

tr:hover .edit:nth-child(1) {
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
    /* font-weight: 500; */
    font-size: 12px;
    color: black;
    /* text-transform: uppercase; */
    overflow: hidden;
    /* border: 1px solid #25c481; */

}

.zoom:hover {
    /* position: absolute; */
    transform: scale(1.5);
    overflow-x: auto;
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
    margin-top: 5%;
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
        if(isset($data['arr'])){
            $arr = json_decode($data['arr']);
            // var_dump($arr);
        }
    ?>
    <section>
        <div class="tbl-header">
            <h1>Danh sách đơn đặt hàng</h1>
        </div>
        <div class="tbl-content">
            <table>
                <thead>
                    <tr>
                        <th>ID đơn hàng</th>
                        <th>Khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ngày đặt hàng</th>
                        <th>Trạng thái</th>
                        <th>Thanh toán</th>
                        <th>Ghi chú</th>
                        <th colspan="2">Tác vụ</th>
                    </tr>
                </thead>
                <?php
                    foreach ($arr as $key => $a) { 
                        if($a[5] == 0){
                            $a[5] = "Tiền mặt";
                        }else{
                            $a[5] = "Chuyển khoản";
                        }
                        if ($a[4] == 0) { 
                            
                ?>
                <tr class="fail">
                    <th><?= $a[0] ?></th>
                    <th class="zoom"><?= $a[9] ?></th>
                    <th><?= $a[7] ?></th>
                    <th><?= $a[11] ?></th>
                    <th><?= $a[6] ?></th>
                    <th><?= 'Chưa xác nhận' ?></th>
                    <th><?= $a[5] ?></th>
                    <th class="zoom"><?= $a[8] ?></th>
                    <th><a href="admin/xacnhan/<?= $a[0] ?>/1" target="_self">Xác nhận</a></th>
                    <th><a href="admin/deleteDonHang/<?= $a[0] ?>" target="_self">Xóa</a></th>
                    <th><a href="admin/xemchitiet/<?= $a[0] ?>" target="_self">Xem</a></th>
                </tr>
                <?php }else{ ?>
                <tr class="normal">
                    <th><?= $a[0] ?></th>
                    <th class="zoom"><?= $a[9] ?></th>
                    <th><?= $a[7] ?></th>
                    <th><?= $a[11] ?></th>
                    <th><?= $a[6] ?></th>
                    <th><?= 'Đã xác nhận' ?></th>
                    <th><?= $a[5] ?></th>
                    <th class="zoom"><?= $a[8] ?></th>
                    <th><a href="admin/xacnhan/<?= $a[0] ?>/0" target="_self">Hủy Xác nhận</a></th>
                    <th><a href="admin/deleteDonHang/<?= $a[0] ?>" target="_self">Xóa</a></th>
                    <th><a href="admin/xemchitiet/<?= $a[0] ?>" target="_self">Xem</a></th>
                </tr>
                <?php }
                ?>
                <?php }
                ?>

            </table>

        </div>
    </section>
</div>