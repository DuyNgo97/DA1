<link rel="stylesheet" href="public/css/edit.css">

<div class="main">
    <?php
            if(isset($data["arrEd"])){
                 $arr = json_decode($data["arrEd"]);
                //   var_dump($data["arrEd"]);
                
               
            }
           
        ?>
    <?php   //while($row= mysqli_fetch_assoc($data['arrEd'] )){  ?>
    <form action="admin/updateuser" target="_self" method="POST">
        <div class="a">
          
            <h1>Sửa tài khoản</h1>
            <hr>
            
            <label for="id"><b>ID</b></label>
            <input type="text" name="us_id" value="<?= $data['id'] ?>">
            <label for="tk"><b>tên tài khoản</b></label>
            <input type="text" name="tk" value="<?= $arr[0][1] ?>">
            <label for="psw"><b>Mật Khẩu</b></label>
            <input type="password" name="psw"value="" >
            <!-- <label for="em"><b>Email</b></label>
            <input type="text" name="em">
            <label for="sdt"><b>Số điện thoại</b></label>
            <input type="text" name="sdt"> -->
            <?php if(isset($data["check"])){
                echo '<h1> update thanh cong <h1>';
            } ?>
            <div class="clearfix">
                <button type="submit" name="submit" class="submit">Sửa</button>
            </div>
        </div>
    </form>
    <a href="admin/user" style="text-decoration: none; color:white;" target="_self"><button type="submit" class="submit">Quay về</button></a>
    <?php //} ?>
    <!-- <form action="" method="POST">
=======
    <!-- <form action="">
>>>>>>> duy
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