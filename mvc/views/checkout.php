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
	<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
</head>
<?php
require_once 'mvc/views/body/header.php'
?>

<body class="bg-light">
	<div class="container">
		<div class="py-5 text-center">
			<h1>Thanh toán</h1>

		</div>

		<div class="row">
			<div class="col-md-4 order-md-2 mb-4">
				<h4 class="d-flex justify-content-between align-items-center mb-3">
					<span class="text-muted">Giỏ hàng</span>
					<span class="badge badge-secondary badge-pill">3</span>
				</h4>
				<ul class="list-group mb-3">
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0">Product name</h6>
							<small class="text-muted">Brief description</small>
						</div>
						<span class="text-muted">12000 vnd</span>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0">Second product</h6>
							<small class="text-muted">Brief description</small>
						</div>
						<span class="text-muted">8000 vnd</span>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0">Third item</h6>
							<small class="text-muted">Brief description</small>
						</div>
						<span class="text-muted">5000 vnd</span>
					</li>
					<li class="list-group-item d-flex justify-content-between bg-light">
						<div class="text-success">
							<h6 class="my-0">Voucher</h6>
							<small>Giảm giá</small>
						</div>
						<span class="text-success">-5000 vnd</span>
					</li>
					<li class="list-group-item d-flex justify-content-between">
						<span>Tổng tiền (VND)</span>
						<strong>20000 vnd</strong>
					</li>
				</ul>

				<form class="card p-2">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Nhập mã giảm giá">
						<div class="input-group-append">
							<button type="submit" class="btn btn-secondary">Redeem</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-8 order-md-1">
				<h4 class="mb-3">Thông tin và địa chỉ nhận hàng</h4>
				<form class="needs-validation" novalidate>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="firstName">Họ</label>
							<input type="text" class="form-control" id="firstName" placeholder="" value="" required>
							<div class="invalid-feedback">
								Họ không được để trống
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="lastName">Tên</label>
							<input type="text" class="form-control" id="lastName" placeholder="" value="" required>
							<div class="invalid-feedback">
								Tên không được để trống
							</div>
						</div>
					</div>

					<div class="mb-3">
						<label for="username">Tên đăng nhập</label>
						<div class="input-group">
							<input type="text" class="form-control" id="username" placeholder="Tên đăng nhập" required>
							<div class="invalid-feedback" style="width: 100%;">
								Tên đăng nhập không được để trống
							</div>
						</div>
					</div>

					<div class="mb-3">
						<label for="email">Email <span class="text-muted">(Optional)</span></label>
						<input type="email" class="form-control" id="email" placeholder="VD: ...@gmail.com">
						<div class="invalid-feedback">
							Email không được để trống
						</div>
					</div>

					<div class="mb-3">
						<label for="address">Địa chỉ</label>
						<input type="text" class="form-control" id="address" placeholder="VD: 123 Trường Chinh" required>
						<div class="invalid-feedback">
							Địa chỉ không được để trống
						</div>
					</div>


					<div class="row">
						<div class="col-md-4 mb-3">
							<label for="country">Tỉnh/Thành phố</label>
							<select class="custom-select d-block w-100" id="country" required>
								<option value="">Chọn...</option>
								<option>TP Hồ Chí Minh</option>
								<option>Hà Nội</option>
								<option>Nha Trang</option>
							</select>
							<div class="invalid-feedback">
								Chọn Tỉnh/Thành phố
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="state">Quận/Huyện</label>
							<select class="custom-select d-block w-100" id="state" required>
								<option value="">Chọn...</option>
								<option>California</option>
							</select>
							<div class="invalid-feedback">
								Chọn Quận/Huyện
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="zip">Phường/Xã</label>
							<select class="custom-select d-block w-100" id="state" required>
								<option value="">Chọn...</option>
								<option>California</option>
							</select>
							<div class="invalid-feedback">
								Chọn Phường/Xã
							</div>
						</div>
					</div>
					<hr class="mb-4">

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="save-info">
						<label class="custom-control-label" for="save-info">Lưu thông tin</label>
					</div>
					<hr class="mb-4">

					<h4 class="mb-3">Thông tin thanh toán</h4>

					<div class="d-block my-3">
						<div class="custom-control custom-radio">
							<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
							<label class="custom-control-label" for="credit">Credit card</label>
						</div>
						<div class="custom-control custom-radio">
							<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
							<label class="custom-control-label" for="debit">Debit card</label>
						</div>
						<div class="custom-control custom-radio">
							<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
							<label class="custom-control-label" for="paypal">PayPal</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="cc-name">Tên chủ thẻ</label>
							<input type="text" class="form-control" id="cc-name" placeholder="" required>
							<small class="text-muted">Nhập tên được ghi trên thẻ</small>
							<div class="invalid-feedback">
								Nhập tên được ghi trên thẻ
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="cc-number">Số thẻ</label>
							<input type="text" class="form-control" id="cc-number" placeholder="" required>
							<div class="invalid-feedback">
								Nhập số thẻ được ghi trên thẻ
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 mb-3">
							<label for="cc-expiration">Hạn thẻ</label>
							<input type="text" class="form-control" id="cc-expiration" placeholder="" required>
							<div class="invalid-feedback">
								Nhập hạn thẻ được ghi trên thẻ
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="cc-cvv">Mã an toàn</label>
							<input type="text" class="form-control" id="cc-cvv" placeholder="" required>
							<div class="invalid-feedback">
								Nhập mã an toàn
							</div>
						</div>
					</div>
					<hr class="mb-4">
					<button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color:#198754 ;">Thanh toán</button>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
	</script>
	<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
</body>
<?php include 'body/footer.php' ?>

</html>