<div class="main">

    <div class="cards">

        <div class="card">
            <div class="card-content">
                <div class="number"><?php 
                    if(isset($data['totalDH'])){
                        echo $data['totalDH'];
                    }
                ?></div>
                <div class="card-name">Đơn hàng chưa duyệt</div>
            </div>

            <div class="icon-box">
                <i class="fas fa-chart-bar"></i>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="number"><?php 
                    if(isset($data['totalUS'])){
                        echo $data['totalUS'];
                    }
                ?></div>
                <div class="card-name">Người dùng</div>
            </div>

            <div class="icon-box">
                <i class="fa fa-user"></i>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="number"><?php 
                    if(isset($data['totalPD'])){
                        echo $data['totalPD'];
                    }
                ?></div>
                <div class="card-name">sản phẩm</div>
            </div>

            <div class="icon-box">
                <i class="fa fa-cubes"></i>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="number"><?php 
                    if(isset($data['totalVC'])){
                        echo $data['totalVC'];
                    }
                ?></div>
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
            <div id="myfirstchart" style="height: 500px;"></div>
        </div>
        <div class="chart" id="doughnut-chart">
            <h2>Biểu đồ sản phẩm</h2>
            <div id="piechart_3d" style="width: 400px; height: 500px;"></div>
        </div>
    </div>

</div>