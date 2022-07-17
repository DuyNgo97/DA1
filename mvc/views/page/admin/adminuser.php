<style>
      .content-table{
    border-collapse: collapse;
    margin: 20px 150px;
    font-size: 1.2em;
    min-width: 1000px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 5px rgba(0,0,0,15);
   }

   .content-table thead tr{
    background-color: #299b63;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
   }
   .content-table th, .content-table td {
    padding: 12px 15px;
   }

   .content-table tbody tr {
    border-bottom: 1px solid #dddddd;
   }
   .content-table tbody tr td{
     color: #808080;
   }
   .content-table tbody tr td a{
    text-decoration: none;
    color: #808080;
   }
   .content-table tbody tr td a:hover{
    color: darkgreen;
   }
   .a h1 {
    text-align: center;
    padding-top: 50px;
    color: #299b63;
   }

   
</style>



<div class="main">
<?php
            if(isset($data["arrUs"])){
                $arr = json_decode($data["arrUs"]);
                //  var_dump($arr);
            }
            ?>
      <div class="a" >
        <h1>Danh sách tài khoản</h1>
        <table class="content-table" >
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
            <tbody>
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
            </tbody>
        </table>

</div>

