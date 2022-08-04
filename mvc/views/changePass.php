<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Password</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <base href="http://localhost/da1/" target="_blank">
    <link rel="stylesheet" href="./public/css/forgot.css" />
    <link rel="icon" href="public/images/logo.png">
</head>

<body>
    <?php
        if(isset($data['check'])){
            if($data['check']){
                echo "<h1 style='color: red;'>Tạo mới thành công!</h1>";
            }else{
                echo "<h1 style='color: red;'>Tạo mới không thành công!</h1>";
            }
        }
    ?>
    <form action="forgotpass/changePass" class="sign-in-form" target="_self" method="POST">
        <a href="home" target="_self"><img src="public/images/logo_shop.png" width="300px" height="100px" alt=""></a>
        <h2 class="title">Tạo mới password</h2>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="password" placeholder="Vui lòng điền password mới!" name="pass" />
            <input type="hidden" value="<?= $data['code'] ?>" name="code">
        </div>
        <!-- <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mật khẩu" name="password" />
        </div> -->
        <input type="submit" value="Xác nhận" class="btn solid" name="btn-create" />
    </form>
</body>

</html>