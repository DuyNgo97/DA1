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
            <div class="col-12 col-md-6 col-lg-4 ">
                <div class="account-infor border rounded text-center">
                    <div class="account-avartar mt-3 ">
                        <img class="rounded-circle w-50" src="public/images/avt.png" alt="">
                    </div>
                    <div class="account-name ">
                        <h1>phan tiến bách</h1>
                    </div>
                    <div class="account-gmail ">
                        <h2>gmail</h2>
                    </div>
                    <div class="account-phone">
                        <h3>01921919238123123123</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 h-100">
                <div class="account-setting border rounded">
                    <div class="reset-password d-flex  justify-content-between  align-items-center">
                        <div class="d-flex  align-items-center">
                            <div class="me-2"><i class="bi bi-file-lock " style="font-size: 3rem;"></i></div>
                            <div>
                                <div>Mật khẩu</div>
                                <div>Thay đổi mật khẩu</div>
                            </div>
                        </div>
                        <div class="me-2">
                            <a href="#" class="btn btn-danger">Thay đổi</a>
                        </div>
                    </div>

                    <div class="reset-password d-flex  justify-content-between  align-items-center">
                        <div class="d-flex  align-items-center">
                            <div class="me-2"><i class="bi bi-phone" style="font-size: 3rem;"></i></div>
                            <div>
                                <div>Số điện thoại</div>
                                <div>Thay đổi số điện thoại</div>
                            </div>
                        </div>
                        <div class="me-2">
                            <a href="#" class="btn btn-danger">Thay đổi</a>
                        </div>
                    </div>

                    <div class="reset-password d-flex  justify-content-between  align-items-center">
                        <div class="d-flex  align-items-center">
                            <div class="ms-2 me-2"><i class="bi bi-envelope " style="font-size: 3rem;"></i></div>
                            <div>
                                <div>gmail</div>
                                <div>Thay đổi gmail</div>
                            </div>
                        </div>
                        <div class="me-2">
                            <a href="#" class="btn btn-danger">Thay đổi</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>

    </div>

</body>

</html>