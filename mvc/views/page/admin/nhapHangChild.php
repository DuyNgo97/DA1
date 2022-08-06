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
        <h1>Thực hiện nhập hàng hóa</h1>
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
                        <th>Hình</th>
                        <th>Số lượng</th>
                        <th>Ngày cập nhật</th>
                        <th>Xác nhận</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($data['arrHH'])){
                            $hh = json_decode($data['arrHH']);
                            foreach ($hh as $key => $h) { ?>
                    <form action="admin/updateSoLuong/<?= $h[0] ?>" method="POST" target="_self">
                        <tr>
                            <td><?= $h[0] ?><input type="hidden" value="<?= $h[0] ?>" name="id"></td>
                            <td><?= $h[1] ?></td>
                            <td><img src="public/images/<?= $h[2] ?>" alt=""></td>
                            <td><input type="number" min="1" value="1" name="soluong"></td>
                            <td>
                                <div id="today"></div>
                            </td>
                            <td><button name="btn-xacnhan">Xác nhận</button></td>
                        </tr>
                    </form>
                    <?php }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</div>