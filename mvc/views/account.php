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
                <div class="account-infor border rounded text-center">
                    <div class="account-avartar mt-3 ">
                        <img class="rounded-circle" style="width: 30%;" src="public/images/avt.png" alt="">
                    </div>
                    <div class="account-name ">
                        <span class="fs-2">Nguyễn Trung Khiêm</span>
                    </div>
                    <div class="account-gmail ">
                        <span class="fs-2">thagbachnguu@gmail.com</span>
                    </div>
                    <div class="account-phone">
                        <span class="fs-2">0377800522</span>
                    </div>
                </div>
                <div class="change-avt mt-3">
                    <a href="#" class="btn btn-danger">Đổi Avartar</a>
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