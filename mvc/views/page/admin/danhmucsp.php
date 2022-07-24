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
    width: 80%;
    table-layout: fixed;
    margin-left: 10%;

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
    height: 200px;
    width: 300px;
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
    font-weight: 500;
    font-size: 16px;
    color: black;
    text-transform: uppercase;
    border: 1px solid #25c481;
    position: relative;

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
    width: 100%;
    background-color: white;
    box-sizing: border-box;
    padding-top: 25px;
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
    <?php
        if(isset($data['arrDM'])){
            $arrDM = json_decode($data['arrDM']);
            // var_dump($arrDM);
        }
    ?>

    <section>
        <!--for demo wrap-->
        <?php
            if(isset($data['check'])){
                if(json_decode($data['check'])){
                    // echo '<h1 class = "title">Thêm thành công</h1>';
                    echo '<script>
                    alert("Thêm thành công!!!");
                    window.location="admin/danhmuc";
                    </script>';
                }else{
                    echo '
                    <script>
                    alert("Thao tác thất bại!!!");
                    </script>
                    ';
                }
            }
            if(isset($data['delete'])){
                if(json_decode($data['delete'])){
                    echo'
                    <script>
                    alert("Xóa thành công!!!");
                    window.location="admin/danhmuc";
                    </script>
                    ';
                }else{
                    echo '
                    <script>
                    alert("Thao tác thất bại!!!");
                    </script>
                    ';
                }
            }
        ?>
        <div class="tbl-header">
            <h1>Danh sách danh mục</h1>
        </div>
        <div class="tbl-content">
            <table>
                <?php
                    foreach ($arrDM as $key => $dm) { ?>
                <tr>
                    <th>
                        <div class="edit">
                            <a href="">EDIT</a>
                        </div>
                        <?= $dm[1] ?>
                        <div class="edit">
                            <a href="admin/deleteDM/<?= $dm[0] ?>" target="_self">XÓA</a>
                        </div>
                    </th>

                </tr>
                <?php }
                ?>
                <!-- <tr>
                    <th>Tên danh mục</th>
                </tr> -->
            </table>
        </div>

        <div class="tbl-header1">
            <h1>Thêm danh mục</h1>
        </div>
        <div class="tbl-content1">
            <form action="admin/addDanhMuc" class="add-danhmuc" method="POST" target="_self">
                <label for="">Tên danh mục</label><br>
                <input type="text" name="name-dm"><br>
                <button name="btn-add" class="add-form1">Thêm</button>
            </form>
        </div>
    </section>
</div>