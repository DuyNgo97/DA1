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
                <div class="account-setting border rounded">
                    <div class="reset-password d-flex  justify-content-between  align-items-center">
                        <div class="d-flex  align-items-center">
                            <div class="me-2"><i class="bi bi-file-lock " style="font-size: 4rem;"></i></div>
                            <div>
                                <div style="font-size: 1.5rem;">Mật khẩu</div>
                                <div>Thay đổi mật khẩu</div>
                            </div>
                        </div>
                        <div class="me-2">
                            <a href="#" class="btn btn-danger">Thay đổi</a>
                        </div>
                    </div>

                    <div class="reset-password d-flex  justify-content-between  align-items-center">
                        <div class="d-flex  align-items-center">
                            <div class="me-2"><i class="bi bi-phone" style="font-size: 4rem;"></i></div>
                            <div>
                                <div style="font-size: 1.5rem;">Số điện thoại</div>
                                <div>Thay đổi số điện thoại</div>
                            </div>
                        </div>
                        <div class="me-2">
                            <a href="#" class="btn btn-danger">Thay đổi</a>
                        </div>
                    </div>

                    <div class="reset-password d-flex  justify-content-between  align-items-center">
                        <div class="d-flex  align-items-center">
                            <div class="ms-2 me-2"><i class="bi bi-envelope " style="font-size: 4rem;"></i></div>
                            <div>
                                <div style="font-size: 1.5rem;">Gmail</div>
                                <div>Thay đổi gmail</div>
                            </div>
                        </div>
                        <div class="me-2">
                            <a href="#" class="btn btn-danger">Thay đổi</a>
                        </div>
                    </div>

                </div>
                <!-- đơn hàng -->
                <div class="order border rounded mt-3 p-3">
                    <div>
                        <h2>Lịch sử đơn hàng</h2>
                    </div>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Chi tiết đơn hàng</th>
                                    <th scope="col">Ngày tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <a href="#"> Cửa xe</a>
                                    </td>
                                    <td>27/6/2022</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <a href="#"> Cửa xe</a>
                                    </td>
                                    <td>27/6/2022</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <a href="#"> Cửa xe</a>
                                    </td>
                                    <td>27/6/2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- đóng đơn hàng -->

            </div>
        </div>
    </div>




</body>

</html>