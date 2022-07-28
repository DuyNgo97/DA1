<?php
    $arrPQ = ['ADMIN','CTV'];
    if(!in_array($_SESSION['vaitro'],$arrPQ)){
		// header('location: http://localhost/mvc-training/home');
		echo '
			<script>
			alert("Bạn không đủ quyền truy cập!");
			window.location = "http://localhost/da1/home";
			</script>
		';
	}
    if(isset($data['chart2'])){
        $chart2 = json_decode($data['chart2']);
        // var_dump($chart2);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <base href="http://localhost/da1/" target="_blank">
    <link rel="stylesheet" href="public/css/admin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Tên SP', 'Số lượng'],
            // ['Work', 11],
            // ['Eat', 2],
            // ['Commute', 2],
            // ['Watch TV', 2],
            // ['Sleep', 7]
            <?php
                $sum = 0;
                foreach ($chart2 as $a) {
                    if($a[0] == 1){
                        $a[0] = 'Xe ô tô';
                    }else{
                        $a[0] = 'Phụ kiện';
                    }
                    echo "['".$a[0]."',".$a[1]."],";
                    $sum += $a[1];
                }
            ?>
        ]);

        var options = {
            title: 'My Daily Activities',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
    </script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="topbar">

            <div class="logo">
                <a href="home" target="_self">
                    <h2>VaChamShop</h2>
                </a>
            </div>

            <div class="search">
                <input type="text" id="search" placeholder="tìm kiếm">
                <label for="search"> <i class="fas fa-search"></i> </label>
            </div>

            <i class="fas fa-bell"></i>

            <div class="user">
                <button class="userbtn">admin</button>
                <!-- <img src="public/images/blog-1.jpg" alt=""> --!>
                <!-- <i class="fas fa-users"></i>-->
                <div class="user-content">
                    <a href="home/dangxuat" target="_self">Đăng xuất</a>
                </div>

            </div>

        </div>

        <div class="sidebar">
            <ul>
                <li class="">
                    <a href="admin" target="_self">
                        <i class="fas fa-chart-bar"></i>
                        <div>Thống kê</div>
                    </a>
                </li>

                <li>
                    <a href="admin/user" target="_self">
                        <i class="fas fa-users"></i>
                        <div>Quản lí tài khoản</div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="admin/pq" target="_self">
                                phân quyền
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="admin/sanpham" target="_self">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Quản lí sản phẩm</div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="admin/sanpham" target="_self">
                                Danh sách sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="admin/addsanpham" target="_self">
                                Thêm sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="admin/typeSP" target="_self">
                                Thể loại sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="admin/danhmuc" target="_self">
                                Thêm danh mục
                            </a>
                        </li>
                        <li>
                            <a href="admin/voucher" target="_self">
                                Tạo voucher
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" target="_self">
                        <i class="fas fa-users"></i>
                        <div>Khuyến mãi</div>
                    </a>
                </li>
                <li>
                    <a href="admin/quanlidonhang" target="_self">
                        <i class="fas fa-users"></i>
                        Quản lí đơn hàng
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="admin/thongKeDonHang" target="_self">
                                Thống kê
                            </a>
                        </li>
                        <li>
                            <a href="admin/addsanpham" target="_self">
                                Thu nhập
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <?php
            require_once "mvc/views/page/admin/".$data['viewpart'].".php";
        ?>
    </div>
    <script>
    new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
                month: '1',
                value: 0
            },
            {
                month: '2',
                value: 0
            },
            {
                month: '3',
                value: 0
            },
            {
                month: '4',
                value: 0
            },
            {
                month: '5',
                value: 0
            },
            {
                month: '6',
                value: 0
            },
            {
                month: '7',
                value: 434000000
            },
            {
                month: '8',
                value: 0
            },
            {
                month: '9',
                value: 0
            },
            {
                month: '10',
                value: 0
            },
            {
                month: '11',
                value: 0
            },
            {
                month: '12',
                value: 0
            },
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'month',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Thu nhập '],
        // yLabels: "month",
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <script src="public/js/admin.js"></script>
</body>

</html>