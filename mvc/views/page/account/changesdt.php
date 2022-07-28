<?php
if (isset($data["arrEd"])) {
    $arr = json_decode($data["arrEd"]);
    // var_dump($data["arrUs"]);
}

?>


<h1>
    Đổi số điện thoại
</h1>
<form action="account/UpdateSDT" target="account.php" method="post">
    <label for="psw"><b>Số điện thoại</b></label>
    <input type="number" name="sdt" id="">

    <?php if (isset($data["check"])) {
        echo '<h1> update thanh cong <h1>';
    } ?>

    <div class="clearfix">
        <button type="submit" name="submit" class="submit">Sửa</button>
    </div>
</form>