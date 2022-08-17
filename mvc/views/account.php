<?php
if (isset($data['abc'])) {
    $abc = json_decode($data['abc']);
    $_SESSION['user'] = json_decode($data['abc']);
    @$_SESSION['vaitro'] = $abc[0][1];
    @$_SESSION['idUS'] = $abc[0][0];
    @$_SESSION['nameUS'] = strtoupper($abc[0][2]);
    @$_SESSION['urlUS'] = 'public/images/chambien2.jpg';
    // var_dump($_SESSION);
}
if (isset($_SESSION['idUS']) == false) {
    header("location:login");
    exit();
}

if (isset($data['donhang'])) {
    $donhang = json_decode($data['donhang']);
    // var_dump($donhang);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cá nhân</title>
    <?php
    require_once 'base.php';
    ?>
    <link rel="icon" href="public/images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">

</head>

<body>
    <?php
    require_once 'mvc/views/body/header.php';
    ?>
    <div class="account-body">
        <div class="account-main row m-0 d-flex justify-content-center ">
            <!-- col left -->
            <div class="col-12 col-md-6 col-lg-4">
                <?php
                if (isset($data["arrUs"])) {
                    $arr = json_decode($data["arrUs"]);
                    // var_dump($data["arrUs"]);
                    $IDUS = $_SESSION['idUS'];

                ?>
                    <div class="account-infor border rounded text-center">
                        <div class="account-avartar mt-3 ">
                            <img class="rounded-circle" style="width: 30%;" src="public/images/avatar/<?= $arr[0][9] ?>" alt="">
                            <div class="account-infor border rounded">
                                <div class="account-avartar mt-3 text-center">
                                    <img class="rounded-circle" style="width: 30%;" src="public/images/avatar/<?= $arr[0][9] ?>" alt="">
                                </div>
                                <div class="account-name ms-3">
                                    <span class="fs-2">Tên: <?= $arr[0][4] ?></span>
                                </div>

                                <div class="account-gmail ms-3">
                                    <span class="fs-2">Email: <?= $arr[0][5] ?></span>
                                </div>
                                <div class="account-phone ms-3">
                                    <span class="fs-2">SĐT: <?= $arr[0][8] ?></span>
                                </div>

                            </div>
                        <?php

                    }

                        ?>
                        <div class="change-avt mt-3 text-center mb-3">
                            <a href="account/changeava" target="_self" class="btn btn-danger">Đổi Avartar</a>
                        </div>
                        </div>
                        <!-- col right -->
                        <div class="col-12 col-md-6 col-lg-6 h-100">
                            <?php
                            require_once "mvc/views/page/account/" . $data['viewpart'] . ".php";
                            ?>

                        </div>
                    </div>
            </div>



</body>


</html>