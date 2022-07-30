<?php
if (isset($data['abc'])) {
    $abc = json_decode($data['abc']);
    //   echo $abc['name_vaitro'];
    //   var_dump($abc);
    //   echo $abc[0][0];
    //   echo $abc[0][1];
    // var_dump($abc[0][5]);
    // if($abc[0][5] != null)

    @$_SESSION['vaitro'] = $abc[0][1];
    // }else{
    //   $_SESSION['vaitro'] = 'USER';
    // }
    @$_SESSION['idUS'] = $abc[0][0];
    @$_SESSION['nameUS'] = strtoupper($abc[0][2]);
    @$_SESSION['urlUS'] = 'public/images/my-do-toa.jpeg';
    // var_dump($_SESSION);
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
    <base href="http://localhost/da1/" target="_blank">
    <link rel="icon" href="public/images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">

</head>

<body>
    <?php
    require_once 'mvc/views/body/header.php'
    ?>
    <div class="account-body">
        <div class="account-main row m-0 d-flex justify-content-center ">
            <!-- col left -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <?php
                if (isset($data["arrUs"])) {
                    $arr = json_decode($data["arrUs"]);
                    // var_dump($data["arrUs"]);
                    $IDUS = $_SESSION['idUS'];

                ?>
                    <div class="account-infor border rounded text-center">
                        <div class="account-avartar mt-3 ">
                            <img class="rounded-circle" style="width: 30%;" src="public/images/avartar/<?= $arr[0][9]?>" alt="">
                        </div>
                        <div class="account-name ">
                            <span class="fs-2"><?= $_SESSION['nameUS'] ?></span>
                        </div>
                        <?php


                        ?>
                        <div class="account-gmail ">
                            <span class="fs-2"><?= $arr[0][5] ?></span>
                        </div>
                        <div class="account-phone">
                            <span class="fs-2">0<?= $arr[0][8] ?></span>
                        </div>

                    </div>
                <?php

                }

                ?>
                <div class="change-avt mt-3">
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