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
                    <a href="#">Đăng xuất</a>
                </div>

            </div>

        </div>

        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-chart-bar"></i>
                        <div>Thống kê</div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <div>Quản lí tài khoản</div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Quản lí sản phẩm</div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <div>Khuyến mãi</div>
                    </a>
                </li>


            </ul>
        </div>
        <div class="main">

            <div class="cards">

                <div class="card">
                    <div class="card-content">
                        <div class="number">2</div>
                        <div class="card-name">thống kê</div>
                    </div>

                    <div class="icon-box">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">5</div>
                        <div class="card-name">Người dùng</div>
                    </div>

                    <div class="icon-box">
                        <i class="fa fa-user"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">5</div>
                        <div class="card-name">sản phẩm</div>
                    </div>

                    <div class="icon-box">
                        <i class="fa fa-cubes"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">5</div>
                        <div class="card-name">khuyến mãi</div>
                    </div>

                    <div class="icon-box">
                        <i class="fa fa-tags"></i>
                    </div>
                </div>
            </div>

            <div class="charts">
                <div class="chart">
                    <h2>Biểu đồ sản phẩm tiêu thụ trong năm</h2>
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="chart" id="doughnut-chart">
                    <h2>Biểu đồ sản phẩm</h2>
                    <canvas id="doughnut"></canvas>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <script src="public/js/chart1.js"></script>
    <script src="public/js/chart2.js"></script>

</body>

</html>