<?php
if (isset($data["arrUs"])) {
    $arr = json_decode($data["arrUs"]);
    // var_dump($data["arrUs"]);
}

?>


<h1>
    Đổi mật khẩu
</h1>
<form action="account/Update" target="account.php" method="post">
    <label for="psw"><b>Mật Khẩu</b></label>
    <input class="form-control w-25 mb-2" type="password" name="psw" value="">

    <div class="clearfix">
        <button type="submit" name="submit" class="submit btn btn-danger">Sửa</button>
    </div>
</form>

<?php if (isset($data["check"])) {
    echo '<h1> update thanh cong <h1>';
} ?>