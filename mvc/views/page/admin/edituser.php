<link rel="stylesheet" href="public/css/edit.css">

<div class="main">
        <?php
            if(isset($data["arrEd"])){
                $arr = json_decode($data["arrEd"]);
                   // var_dump($arr);
            }
        ?>
        <?php ?>
        <form action="" method="POST">
            <div class="a">
                <h1>Sửa tài khoản</h1>
                <hr>

                <label for="id"><b>ID</b></label>
                <input type="text"  name="us_id"  >
                <label for="tk"><b>tên tài khoản</b></label>
                <input type="text" name="tk">
                <label for="psw"><b>Mật Khẩu</b></label>
                <input type="password"  name="psw" >
                <label for="em"><b>Email</b></label>
                <input type="text" name="em">
                <label for="sdt"><b>Số điện thoại</b></label>
                <input type="text" name="sdt">

                <div class="clearfix">
                    <button  type="submit" class="submit">Sửa</button>
                </div>
            </div>
        </form>
        <!-- <form action="" method="POST">
            <label for="">ID</label>
            <input type="text" name="us_id">
            <label for="">Tài khoản</label>
            <input type="text" name="tk">
            <label for="">mật khẩu</label>
            <input type="text" name="mk">
            <label for="">Email</label>
            <input type="text" name="em">
            <label for="">Số điện thoại</label>
            <input type="text" name="sdt">
            <button name="submit">Sửa</button>
        </form> -->

</div>