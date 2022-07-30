<?php
if (isset($data["arrUs"])) {
    $arr = json_decode($data["arrUs"]);
    // var_dump($data["arrUs"]);
}

?>


<h1>
    Đổi mật khẩu
</h1>
<form action="account/update" target="_self" method="post">
    <label for="psw"><b>Mật Khẩu</b></label>
    <input class="form-control w-25 mb-2" type="password" name="psw" value="">

    <?php if (isset($data["check"])) {
        echo "<script>alert('Đổi mật khẩu thành công!!');window.location='account'; </script>";
    } ?>

    <div class="clearfix">
        <button type="submit" name="submit" class="submit btn btn-danger">Sửa</button>
    </div>
</form>