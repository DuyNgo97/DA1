<style>
    h1 {
        font-size: 30px;
        color: black;
        text-transform: uppercase;
        font-weight: 600;
        text-align: center;
        margin-bottom: 15px;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        color: #25c481;
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
    if (isset($data['arrBL'])) {
        $arrBL = json_decode($data['arrBL']);
        // var_dump($arrBL);
    }
    ?>
    <!-- new  -->
    <section>
        <?php
        if (isset($data['check'])) {
            if ($data['check']) {
                echo "<h1>Xóa bình luận thành công!</h1>";
            } else {
                echo "<h1>Xóa bình luận thất bại!</h1>";
            }
        }
        ?>
        <!--for demo wrap-->
        <h1>Danh sách bình luận</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">

            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ID sản phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Hình</th>
                        <th>Người bình luận</th>
                        <th>Nội dung</th>
                        <th>Ngày</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="admin/binhLuanSP" method="POST" target="_self">
                        <?php
                        foreach ($arrBL as $key => $a) { ?>
                            <tr>
                                <!-- <td><input type="hidden" value="" name="id"></td> -->
                                <td><?= $a[0] ?></td>
                                <td><?= $a[1] ?></td>
                                <td><img src="public/images/<?= $a[2] ?>" alt=""></td>
                                </td>
                                <td><?= $a[3] ?></td>
                                <td>
                                    <textarea name="" id="" cols="30" rows="10"><?= $a[4] ?></textarea>
                                </td>
                                <td><?= $a[5] ?></td>
                                <td><a href="admin/deleteBL/<?= $a[6] ?>" target="_self">Xóa</a></td>
                            </tr>
                        <?php }
                        ?>
                    </form>
                </tbody>
            </table>
        </div>
    </section>
</div>