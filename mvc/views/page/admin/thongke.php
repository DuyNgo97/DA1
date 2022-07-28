<style>
h1 {
    font-size: 20px;
    color: white;
    text-transform: uppercase;
    font-weight: 600;
    text-align: center;
    /* margin-bottom: 15px; */
}

table {
    width: 90%;
    table-layout: fixed;
    margin-left: 5%;

}

.tbl-header {
    display: flex;
    height: 50px;
    background-color: #25c481;
    align-items: center;
    justify-content: center;
}

.tbl-header1 {
    margin-top: 50px;
    width: 300px;
    display: flex;
    height: 50px;
    background-color: #25c481;
    align-items: center;
    justify-content: center;
}

.tbl-content {
    /* height: 300px; */
    overflow-x: auto;
    margin-top: 0px;
    border: 1px solid #25c481;
    padding: 25px 0;
    background: linear-gradient(to right, #25c481, #25b7c4);
    ;
}

.tbl-content1 {
    /* height: 200px; */
    /* width: 300px; */
    overflow-x: auto;
    margin-top: 0px;
    border: 1px solid #25c481;
    padding: 25px 0;
    background: linear-gradient(to right, #25c481, #25b7c4);
    ;
}

tr {
    margin: 25px 0;
    background-color: #fff;
    position: relative;
}

.fail {
    color: white;
    background-color: red;
    transition: all 0.8s;
}

.fail th:hover {
    background-color: white;
    transition: all 0.8s;
}

.fail th:hover a {
    color: red;
    transition: all 0.8s;
}

.normal {
    color: black;
    background-color: #fff;
    transition: all 0.8s;
}

.normal a {
    color: black;
    transition: all 0.8s;
}

.normal th:hover {
    background-color: #25c481;
    transition: all 0.8s;
}

.normal th:hover a {
    color: #fff;
}

tr:hover .edit:nth-child(1) {
    display: flex;
    align-items: center;
    justify-content: center;
    /* right: 5px; */

}

tr:hover .edit:nth-child(2) {
    display: flex;
    align-items: center;
    justify-content: center;
}

a {
    color: #fff;
    text-decoration: none;
    text-align: center;
}

.edit {

    position: absolute;
    height: 90%;
    width: 100px;
    margin-top: 3px;
    display: none;
    /* display: flex; */
}



.edit:nth-child(1) {
    top: 0;
    right: 0px;
    background-color: #25c481;
}

.edit:nth-child(1):hover {
    background-color: red;
}

.edit:nth-child(2):hover {
    background-color: red;
}

.edit:nth-child(2) {
    top: 0;
    left: 5px;
    background-color: #25b7c4;
}

th {
    padding: 15px 15px;
    text-align: center;
    /* font-weight: 500; */
    font-size: 12px;
    color: black;
    /* text-transform: uppercase; */
    overflow: hidden;
    /* border: 1px solid #25c481; */

}

.zoom:hover {
    /* position: absolute; */
    transform: scale(1.5);
    overflow-x: auto;
}



td {
    padding: 15px;
    text-align: left;
    vertical-align: middle;
    font-weight: 300;
    font-size: 12px;
    color: black;
    border-bottom: solid 1px #25c481;

}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

body {
    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);
    font-family: 'Roboto', sans-serif;
}

section {
    margin: 50px;
}

.add-danhmuc {
    height: 100%;
    width: 80%;
    background-color: white;
    box-sizing: border-box;
    padding-top: 25px;
    margin-left: 10%;
    padding-left: 5%;
    /* padding-left: 10%; */
}

.add-danhmuc input {
    height: 30px;
    width: 80%;
    margin-left: 10%;
    margin-top: 5%;
}

.add-form1 {
    height: 25px;
    width: 80px;
    margin-top: 10px;
    margin-left: 35%;
    background-color: #25c481;
}

.title {
    font-size: 25px;
    color: #25c481;
    margin: 50px;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
</style>
<div class="main">
    <section>
        <div class="tbl-content">
            <h1>Thống kê đơn hàng</h1>
            <table>
                <thead>
                    <tr>
                        <th>Đơn hàng</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Chưa xác nhận</th>
                        <th><?= $data['totalChua'] ?></th>
                    </tr>
                    <tr>
                        <th>Xác nhận</th>
                        <th><?= $data['totalXN'] ?></th>
                    </tr>
                    <tr>
                        <th>Tổng</th>
                        <th><?= $data['totalAll'] ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tbl-content" style="margin-top: 50px;">
            <h1>Thống kê doanh thu theo tháng</h1>
            <form action="admin/toTalMonth/" method="POST" target="_self">
                <select id="loaisp" name="month" style="width: 100px; height: 30px;  ">
                    <?php
                    for ($i=1; $i <= 12 ; $i++) { ?>
                    <option value="<?= $i ?>"><?= 'Tháng '.$i ?></option>
                    <?php }
                ?>
                </select>
                <table>
                    <thead>
                        <tr>
                            <th>Tổng thu nhập</th>
                            <th><?php
            if(isset($data['check'])){
                // var_dump($data['check']);
                $total = json_decode($data['check']);
                echo number_format($total[0][0]);
            }
        ?></th>
                        </tr>
                    </thead>
                </table>
                <button>Hien thi</button>
            </form>
        </div>
    </section>
</div>