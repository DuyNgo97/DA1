<style>
h1 {
    font-size: 30px;
    color: black;
    text-transform: uppercase;
    font-weight: 600;
    text-align: center;
    margin-bottom: 15px;
}

table {
    width: 100%;
    /* position: absolute; */
    /* overflow-x: auto; */
    /* table-layout: fixed;  */
}

th {
    height: 50px;
    width: 100px;
    padding: 20px 15px;
    text-align: left;
    font-weight: 500;
    font-size: 18px;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
}

td {
    padding: 15px;
    text-align: center;
    vertical-align: middle;
    font-weight: 300;
    font-size: 16px;
    color: black;
    border-bottom: solid 1px #25c481;

}

td img {
    height: 100px;
    width: 200px;
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

thead {
    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);
    font-family: 'Roboto', sans-serif;
}

section {
    margin: 50px;
    overflow: auto;
}




/* for custom scrollbar for webkit browser*/
</style>
<div class="main">
    <?php
            if(isset($data["arrSP"])){
                $arr = json_decode($data["arrSP"]);
                // var_dump($arr);
            }
            ?>
    <!-- new  -->
    <section>
        <!--for demo wrap-->
        <h1>Danh sách sản phẩm</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">

            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Hình chính</th>
                        <th>HÌnh 1</th>
                        <th>Hình 2</th>
                        <th>HÌnh 3</th>
                        <th>Hình 4</th>
                        <th>color</th>
                        <th>Giá tiền</th>
                        <th>Số lượng</th>
                        <th>Nhà sản xuất</th>
                        <th>Mô tả</th>
                        <th>Trạng thái</th>
                        <th>Thể loại</th>
                        <th>Mẫu mã</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($arr as $key => $a) { ?>
                    <tr>
                        <td><?= $a[0] ?></td>
                        <td><?= $a[1] ?></td>
                        <td><img src="public/images/<?= $a[13] ?>" alt=""></td>
                        <td><img src="public/images/<?= $a[14] ?>" alt=""></td>
                        <td><img src="public/images/<?= $a[15] ?>" alt=""></td>
                        <td><img src="public/images/<?= $a[16] ?>" alt=""></td>
                        <td><img src="public/images/<?= $a[17] ?>" alt=""></td>
                        <td><?= $a[3] ?></td>
                        <td><?= $a[2] ?></td>
                        <td><?= $a[4] ?></td>
                        <td><?= $a[10] ?></td>
                        <td><textarea name="" id="" cols="30" rows="10"><?= $a[7] ?></textarea></td>
                        <td><?php
                            if($a[6] == 'Còn hàng'){
                                $trangthai = 'Green';
                            }else{
                                $trangthai = 'Red';
                            }
                        ?>
                            <?= $a[6] ?>
                        </td>
                        <td><?= $a[11] ?></td>
                        <td><?= $a[12] ?></td>
                        <td><button>Sửa</button></td>
                        <td><button>Xoá</button></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>