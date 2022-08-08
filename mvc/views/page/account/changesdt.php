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
    <label for="psw"><b>Số điện thoại</b></label>
    <input type="number" placeholder="Số điện thoại" name="sdt" required />

    <?php if (isset($data["check"])) {
        echo "<script>alert('Đổi số điện thoại thành công!!');window.location='account'; </script>";
        // echo $data['check'];
    } ?>

    <div class="clearfix">
        <button type="submit" name="submit" class="submit btn btn-danger">Sửa</button>
    </div>
</form>