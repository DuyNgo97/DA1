<?php
if (isset($data["arrEd"])) {
    $arr = json_decode($data["arrEd"]);
    // var_dump($data["arrUs"]);
}

?>


<h1>
    Đổi hình đại diện
</h1>
<form action="account/UpdateAva" target="_self"  method="post" enctype="multipart/form-data">
    <label for="psw"><b>Hình đại diện</b></label>
    <input type="file" name="img">

    <?php if (isset($data["check"])) {
        echo "<script>alert('Đổi hình đại diện thành công!!');window.location='account'; </script>";
    } ?>

    <div class="clearfix">
        <button type="submit" name="submit" class="submit">Sửa</button>
        <!-- <a href="account"><button class="btn btn-danger">Quay lại</button></a> -->
    </div>
</form>