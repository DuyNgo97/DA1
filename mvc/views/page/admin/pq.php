<link rel="stylesheet" href="public/css/pq.css">
<div class="main">
<?php
            if(isset($data["arrPq"])){
                $arr = json_decode($data["arrPq"]);
               // var_dump($arr);
            }
            ?>
             <div class="a">
        <h1>Danh sách Quản Trị</h1>
        <table class="content-table">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Tài khoản</th>
                <th scope="col">vai trò</th>
                <th scope="col">Sửa</th>
            </thead>
            <tbody>
                <?php 
                // if(is_array($arr) || is_object($arr)){
                 foreach ($arr as $key => $a) { ?>
                    <td><?=$a[0] ?></td>
                    <td><?=$a[1] ?></td>
                    <td><?=$a[2] ?></td>
                    <td><a href="admin/Editpq/<?= $a[0] ?>" target="_self"><button>Sửa</button></a></td>
                </tr>


                <?php    }
               // }
            ?>          
            </tbody>
        </table>
</div>