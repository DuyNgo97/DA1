<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cá nhân</title>
    <?php
    require_once 'base.php';
    ?>
    <link rel="icon" href="public/images/logo.png">
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
            color: black;
            /* text-transform: uppercase; */
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
</head>
<div class="main">
    <?php
    if (isset($data['arrDH'])) {
        $dh = json_decode($data['arrDH']);
        // var_dump($dh);
    }
    ?>
    <!-- new  -->
    <section>
        <a href="account" target="_self">Back</a>
        <!--for demo wrap-->
        <h1>ĐƠN HÀNG</h1>
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
                        <th>color</th>
                        <th>Giá tiền</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Nhà sản xuất</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dh as $key => $a) { ?>
                        <tr>
                            <th><?= $a[0] ?></th>
                            <th><?= $a[3] ?></th>
                            <th><img src="public/images/<?= $a[2] ?>" width="200px" height="100px" alt=""></th>
                            <th><?= $a[6] ?></th>
                            <th><?= number_format($a[4]) ?> VND</th>
                            <th><?= $a[1] ?></th>
                            <th><?= number_format((($a[4] * $a[1]) * (1 - $a[5]))) ?> VND</th>
                            <th><?= $a[7] ?></th>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</div>