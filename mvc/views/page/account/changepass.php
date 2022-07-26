<?php
// if (isset($data["arrUS"])) {
//     $arr = json_decode($data["arrUS"]);
//     // var_dump($data["arrUS"]);
// }

?>

<div class="main">
<form action="./account/changepass" method="post">

    <label for="psw"><b>Mật Khẩu</b></label>
    <input type="password" name="psw" value="">

    <?php if (isset($data["check"])) {
        echo '<h1> update thanh cong <h1>';
    } ?>

    <button type="submit" name="submit" class="submit">Sửa</button>
</form>
</div>