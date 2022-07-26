<?php
if (isset($data["arrUs"])) {
    $arr = json_decode($data["arrUs"]);
    // var_dump($data["arrUs"]);
}

?>


<h1>
    Đổi mật khẩu
</h1>
<label for="psw"><b>Mật Khẩu</b></label>
<input type="password" name="psw" value="">
<?php if (isset($data["check"])) {
    echo '<h1> update thanh cong <h1>';
} ?>
<div class="clearfix">
    <button type="submit" name="submit" class="submit">Sửa</button>
</div>