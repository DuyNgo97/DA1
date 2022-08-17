<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm</title>
    <?php
    require_once 'base.php';
    ?>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link rel="icon" href="public/images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/find.css">
    <style>
        h1 {
            margin-top: 10px;
        }

        /* form{
			border: 1px solid green;
		} */
    </style>
</head>

<body>
    <!-- Đây là header -->
    <?php
    require_once 'mvc/views/body/header.php';
    ?>
    <!-- Đây là body -->
    <div class="sidebar">
        <ul>
            <li class="">
                <a href="find_item/clickoto" target="_self">
                    <i class="fas fa-chart-bar"></i>
                    <div>Ô-TÔ</div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="find_item/clickmer" target="_self">
                            MERCEDES BENZ
                        </a>
                    </li>
                    <li>
                        <a href="find_item/clickbmw" target="_self">
                            BMW
                        </a>
                    </li>
                    <li>
                        <a href="find_item/clickaudi" target="_self">
                            AUDI
                        </a>
                    </li>
                    <li>
                        <a href="find_item/clickhonda" target="_self">
                            HONDA
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="find_item/clickphutung" target="_self">
                    <i class="fas fa-users"></i>
                    <div>PHỤ TÙNG</div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="find_item/clickguong" target="_self">
                            Gương
                        </a>
                    </li>
                    <li>
                        <a href="find_item/clicklight" target="_self">
                            Đèn Xe
                        </a>
                    </li>
                    <li>
                        <a href="find_item/clickcam" target="_self">
                            Camera
                        </a>
                    </li>
                    <!-- <li>
						<a href="" target="_self">
							Khác...
						</a>
					</li> -->
                </ul>
            </li>

            <!-- <li>
				<a href="" target="_self">
					<i class="fas fa-chalkboard-teacher"></i>
					<div>Năm sản xuất</div>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="" target="_self">
							2022
						</a>
					</li>
					<li>
						<a href="" target="_self">
							2021
						</a>
					</li>
					<li>
						<a href="" target="_self">
							2020
						</a>
					</li>
					<li>
						<a href="" target="_self">
							2019
						</a>
					</li>
				</ul>
			</li> -->

            <li>
                <a href="" target="_self">
                    <i class="fas fa-users"></i>
                    <div>GIÁ</div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="find_item/clickN500" target="_self">
                            Dưới 500 triệu
                        </a>
                    </li>
                    <li>
                        <a href="find_item/click1t" target="_self">
                            Từ 500 triệu đến 1 tỷ
                        </a>
                    </li>
                    <li>
                        <a href="find_item/clickL1t" target="_self">
                            Trên 1 tỷ
                        </a>
                    </li>
            </li>


        </ul>
    </div>

    <div class="container">
        <div class="py-5 text-center tieude">
            <h1>VA CHẠM SHOP XIN CHÀO</h1>

        </div>

        <div class="row">
            <div class="col-md-9 order-md-1">

                <?php
                if (isset($data['viewpart2'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart2'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart3'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart3'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart4'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart4'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart5'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart5'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart6'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart6'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart7'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart7'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart8'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart8'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart9'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart9'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart10'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart10'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart11'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart11'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart12'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart12'] . ".php";
                }
                ?>
                <?php
                if (isset($data['viewpart13'])) {
                    require_once "mvc/views/page/timkiem/" . $data['viewpart13'] . ".php";
                }
                ?>

            </div>

        </div>
    </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script>
    window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
</script>
<script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>

</html>