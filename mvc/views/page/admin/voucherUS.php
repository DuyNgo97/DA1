<?php
    if($_SESSION['vaitro'] != "ADMIN"){
		// header('location: http://localhost/mvc-training/home');
		echo '
			<script>
			alert("Bạn không đủ quyền truy cập!");
			window.location = "http://localhost/da1/admin";
			</script>
		';
	}
?>
<link rel="stylesheet" href="public/css/adminuser.css">

<div class="main">
    <?php
            if(isset($data["arrVC"])){
                $arr = json_decode($data["arrVC"]);
                //  var_dump($arr);
            }
            ?>
    <h1 style="text-align: center;">Danh sách voucher của khách hàng</h1>
    <div class="a" style="display: flex; align-items: center; justify-content: center;">

        <table class="content-table">
            <thead>
                <th scope="col">ID voucher</th>
                <th scope="col">Tên voucher</th>
                <th scope="col">Code</th>
                <th scope="col">Giá trị</th>
                <th scope="col">Ngày kết thúc</th>
                <th scope="col">Tài khoản</th>
                <th scope="col">Vai trò</th>
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
                <td><a href="" target="_self"><button>Sửa</button></a></td>
                <td><a href="" target="_self"><button>Xóa</button></a></td>
                </tr>


                <?php    }
                }
            ?>
            </tbody>
        </table>

    </div>