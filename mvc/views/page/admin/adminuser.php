<link rel="stylesheet" href="public/css/adminuser.css">

<div class="main">
    <?php
            if(isset($data["arrUs"])){
                $arr = json_decode($data["arrUs"]);
                //  var_dump($arr);
            }
            ?>
           
    <div class="a">
        <h1>Danh sách tài khoản</h1>
        <table class="content-table">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">tài khoản</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">vai trò</th>
                <th scope="col">Tên</th>
                <th scope="col">email</th>
                <th scope="col">dia chi</th>
                <th scope="col">ngày tạo</th>
                <th scope="col">số điện thoại</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </thead>
            <tbody>
                <?php 
                if(is_array($arr) || is_object($arr)){
                 foreach ($arr as $key => $u) { 
                    if($u[0]==1 ){
                        continue;
                    }
                    ?>
                    
                    <td><?=$u[0] ?></td>
                    <td><?=$u[1] ?></td>
                    <td><?=$u[2] ?></td>
                    <td><?=$u[3] ?></td>
                    <td><?=$u[4] ?></td>
                    <td><?=$u[5] ?></td>
                    <td><?=$u[6] ?></td>
                    <td><?=$u[7] ?></td>
                    <td><?=$u[8] ?></td>
                    <td><a href="admin/edituser/<?=$u[0] ?>" target="_self"><button>Sửa</button></a></td>
                    <td><a href="admin/delete/<?=$u[0] ?>" target="_self"><button>Xóa</button></a></td>
                </tr>


                <?php    }
                }
            ?>          
            </tbody>
        </table>

    </div>