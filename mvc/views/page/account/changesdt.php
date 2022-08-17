<?php
if (isset($data["arrEd"])) {
    $arr = json_decode($data["arrEd"]);
    // var_dump($data["arrUs"]);
}


?>


<h1>
    Đổi số điện thoại
</h1>
<form action="account/UpdateSDT" target="_self" method="post">

    <label for="psw"><b>Nhập Mật Khẩu Cũ</b></label>
    <input class="form-control w-50 mb-2" type="password" name="pswo" value="">

    <label for="psw"><b>Số điện thoại</b></label>
    <input class="form-control w-50 mb-2" type="number" placeholder="Số điện thoại" name="sdt" required />



    <div class="clearfix">
        <button type="submit" name="submit" class="submit btn btn-danger">Sửa</button>
    </div>
</form>