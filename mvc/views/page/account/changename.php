<?php
if (isset($data["arrEd"])) {
    $arr = json_decode($data["arrEd"]);
    // var_dump($data["arrUs"]);
}

?>

<h1>
    Đổi tên người dùng
</h1>
<form action="account/UpdateName" target="_self" method="post">

    <label for="psw"><b>Nhập tên mới</b></label>
    <input class="form-control w-25 mb-2 type="text" name="name" value="">

    <?php if (isset($data["check"])) {
        echo "<script>alert('Đổi hình tên người dùng thành công!!');window.location='account'; </script>";
    } ?>

    <div class="clearfix">
        <button type="submit" name="submit" class="submit btn btn-danger">Sửa</button>
    </div>
</form>