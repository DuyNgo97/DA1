<style>
     #user-info{
        padding: 25px;
    }
    #user-info table{
        margin: 10px auto 0 auto;
        text-align: center;
    }
    #user-info h1{
        text-align: center;
    }
    a{
       
        text-decoration: none;
    }
    a:hover{
        color: yellow;
    }
</style>

<div class="main">
<?php
            if(isset($data["arrUs"])){
                $arr = json_decode($data["arrUs"]);
                //  var_dump($arr);
            }
            ?>
      <div id="user-info">
        <h1>Danh sách tài khoản</h1>
        <!-- <div class="a1">
        <form class="form1" action="" method="get">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit" name="ok" value="tim"><i class="fa fa-search"></i></button>
        </form>
        </div> -->
        <table border="1" id="user-listing" style="width:1000px">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">tài khoản</th>
                <th scope="col">mật khẩu</th>
                <th scope="col">id_vaitro</th>
                <th scope="col">id_info</th>
                <th scope="col">id_voucher</th>
                <th scope="col">id_danhgia</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </thead>
            <?php 
            foreach ($arr as $key => $u) { ?>
            <tr>
                <td><?=$u[0] ?></td>
                <td><?=$u[1] ?></td>
                <td><?=$u[2] ?></td>
                <td><?=$u[3] ?></td>
                <td><?=$u[4] ?></td>
                <td><?=$u[5] ?></td>
                <td><?=$u[6] ?></td>
                <td><a href="#">Sửa</a></td>
                <td><a href="#">Xóa</a></td>
            </tr>

            <?php    }
            ?>
        </table>

</div>