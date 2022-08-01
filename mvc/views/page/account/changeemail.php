<?php
if (isset($data["arrEd"])) {
    $arr = json_decode($data["arrEd"]);
    // var_dump($data["arrUs"]);
}

?>


<h1>
    Đổi email
</h1>
<form action="account/UpdateEmail" target="_self" method="post">
    <label for="psw"><b>Email</b></label>
    <input type="email" name="email" value="">

    <?php if (isset($data["check"])) {
        echo "<script>alert('Đổi Email thành công!!');window.location='account'; </script>";
    } ?>

    <div class="clearfix">
        <button type="submit" name="submit" class="submit">Sửa</button>
    </div>
</form>