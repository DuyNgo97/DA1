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
    <link rel="stylesheet" href="public/css/account.css">
</head>

<body>
    <?php
    require_once 'mvc/views/body/header.php'
    ?>

    <div class="ctn">
        <div class="asside">
            <div class="asside-top">
                <img src="public/images/avt.png" alt="">
            </div>
            <div class="asside-down">
                <p>Trần Thanh Trường</p>
                <p>09882882828</p>
                <p>...@Email</p>
            </div>


        </div>
        <div class="content">
            <form action="">
                <table>
                    <tr>
                        <th class="bi bi-file-lock"></th>
                        <th>Đổi Mật Khẩu</th>
                        <th><button>Thay đổi</button></th>
                    </tr>
                    <tr>
                        <th class="bi bi-phone"></th>
                        <th>Số điện thoại</th>
                        <th><button>Thay đổi</button></th>
                    </tr>
                    <tr>
                        <th class="bi bi-envelope"></th>
                        <th>Email</th>
                        <th><button>Thay đổi</button></th>
                    </tr>
                    <tr>
                        <th class="bi bi-question-octagon"></th>
                        <th>Hỗ trợ trực tuyến</th>
                        <th><button>Hỗ trợ</button></th>
                    </tr>
                </table>
            </form>
        </div>


    </div>


</body>

</html>