<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu?</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <base href="http://localhost/da1/" target="_blank">
    <link rel="stylesheet" href="./public/css/forgot.css" />
    <link rel="icon" href="public/images/logo.png">
</head>
<body>
    <form action="forgotpass/mail" class="sign-in-form" target="_self" method="POST">
                    <a href="home" target="_self"><img src="public/images/logo_shop.png" width="300px" height="100px" alt=""></a>
        <h2 class="title">Quên mật khẩu?</h2>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="email" />
        </div>
        <!-- <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mật khẩu" name="password" />
        </div> -->
        <input type="submit" value="Gửi" class="btn solid" name="btn-qmk" />
    </form>    
</body>
</html>