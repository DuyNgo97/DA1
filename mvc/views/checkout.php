<?php
$arrPQ = ['ADMIN','CTV','KHACHHANG'];
if(!in_array($_SESSION['vaitro'],$arrPQ)){
	echo '
		<script>
		alert("Bạn chưa đăng nhập tài khoản!");
		window.location = "http://localhost/da1/cart";
		</script>
	';
}

if(!isset($_SESSION['cart'])){
    echo '
    <script>
    alert("Bạn chưa đăng nhập tài khoản!");
    window.location = "http://localhost/da1/home";
    </script>
';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Thanh toán</title>
    <base href="http://localhost/da1/" target="_blank">
    <link rel="stylesheet" href="./public/css/checkout.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link rel="icon" href="public/images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <?php
	// Đã người dùng chưa đăng nhập -> hiển thị thông báo yêu cầu người dùng đăng nhập
	// if (!isset($_SESSION['kh_tendangnhap_logged']) || empty($_SESSION['kh_tendangnhap_logged'])) {
	// 	echo 'Vui lòng Đăng nhập trước khi Thanh toán! <a href="/php/myhand/backend/auth/login.php">Click vào đây để đến trang Đăng nhập</a>';
	// 	die;
	// } else {
	// 	// Nếu giỏ hàng trong session rỗng, return
	// 	if (!isset($_SESSION['giohangdata']) || empty($_SESSION['giohangdata'])) {
	// 		echo 'Giỏ hàng rỗng. Vui lòng chọn Sản phẩm trước khi Thanh toán!';
	// 		die;
	// 	}
	// }
	?>

</head>
<?php
require_once 'mvc/views/body/header.php';
?>


<?php
	// var_dump($_SESSION['user']);
?>

<body class="bg-light">
    <form action="checkout/thanhtoan" method="POST" target="_self">
        <div class="container">
            <div class="py-5 text-center">
                <h1>Thanh toán</h1>

            </div>

            <div class="row">
                <div class="col-md-5 order-md-2 mb-4">

                    <!--Mini cart -->


                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Giỏ hàng</span>

                    </h4>
                    <ul class="list-group mb-3">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
								$totalCart = 0;
								foreach ($_SESSION['cart'] as $key => $ca) { 
									$totalCart += ($ca['quantity']*$ca['price']*(1-$ca['giamgia']));
									?>
                                <tr>
                                    <td><?= $ca['name'] ?></td>
                                    <td><?= $ca['quantity'] ?></td>
                                    <td><?= ($ca['quantity']*$ca['price']*(1-$ca['giamgia']))  ?>
                                        VND</td>
                                </tr>
                                <?php }
                            ?>
                                <tr>
                                    <td colspan="2">Phí vận chuyển</td>
                                    <td>8000000 VND</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Tổng tiền</td>
                                    <td><?= $data['totalall'] ?> VND</td>
                                    <input type="hidden" name="total" value="<?= $data['totalall'] ?>">
                                </tr>
                            </tbody>
                        </table>

                    </ul>
                    <!-- <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập mã giảm giá">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </div>
    </form> -->
                    <!-- end minicart -->
                </div>
                <div class="col-md-7 order-md-1">
                    <h4 class="mb-3">Thông tin và địa chỉ nhận hàng</h4>
                    <!-- <form class="needs-validation" novalidate> -->
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Họ và tên</label>
                            <input type="text" class="form-control" id="firstName" placeholder=""
                                value="<?= $_SESSION['nameUS'] ?>" required>
                            <div class="invalid-feedback">
                                Họ và tên không được để trống
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="sdt">Số điện thoại</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="username" name="sdt"
                                placeholder="Nhập số điện thoại" value="<?= $_SESSION['user'][0][5] ?>" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Số điện thoại không được để trống
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" name="email" value="<?= $_SESSION['user'][0][3] ?>"
                            id="email" placeholder="...@email.com">
                        <div class="invalid-feedback">
                            Email không được để trống
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" name="diachi" value="<?= $_SESSION['user'][0][4] ?>"
                            id="address" placeholder="VD: 123 Trường Chinh" required>
                        <div class="invalid-feedback">
                            Địa chỉ không được để trống
                        </div>
                    </div>

                    <hr class="mb-4">
                    <div class="mb-3">
                        <label for="address">Phương thức thanh toán</label>
                        <!-- <input type="text" class="form-control" value="" id="address" placeholder="VD: 123 Trường Chinh"
                            required> -->
                        <select id="color" name="thanhtoan" class="form-control" id="address" required>
                            <option style="" value="">
                                None
                            </option>
                            <option style="" value="0">
                                Tiền mặt
                            </option>
                            <option style="" value="1">
                                Chuyển khoản
                            </option>
                        </select>
                        <div class="invalid-feedback">
                            Vui lòng chọn hình thức thanh toán
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="mb-3">
                        <label for="address">Ghi chú</label>
                        <textarea class="form-control" name="note" id="address" cols="30" rows="10"></textarea>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit"
                        style="background-color:#198754 ;">Thanh
                        toán</button>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
</body>
<?php include 'body/footer.php' ?>

</html>

<script type="text/javascript">
$(document).ready(function() {
    $('input[type="checkbox"]').click(function() {
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });
});
</script>