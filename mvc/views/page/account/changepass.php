<?php
if (isset($data["arrUs"])) {
    $arr = json_decode($data["arrUs"]);
    // var_dump($data["arrUs"]);
}

// $pswo = $_POST['pswo'];
// $password = $_POST['pswn'];
// $pswr = $_POST['pswr'];
// if ($pswo != $data["checkpass"]) {
//     echo "<script>alert('Mật khẩu cũ sai!!');window.location='changepass'; </script>";
// } else if ($password != $pswr) {
//     echo "<script>alert('2 mật khẩu mới khác nhau!!');window.location='account'; </script>";
// }


?>


<h1>Đổi mật khẩu</h1>

<form action="account/updatepass" target="_self" method="post">


    <label for="psw"><b>Nhập Mật Khẩu Cũ</b></label>
    <input class="form-control w-50 mb-2" type="password" name="pswo" value="">

    <label for="psw"><b>Nhập Mật Khẩu Mới</b></label>
    <input class="form-control w-50 mb-2" type="password" name="pswn" value="">

    <label for="psw"><b>Nhập Lại Mật Khẩu Mới</b></label>
    <input class="form-control w-50 mb-2" type="password" name="pswr" value="">

    

    <div class="clearfix">
        <button type="submit" name="submit" class="submit btn btn-danger">Sửa</button>

    </div>


</form>