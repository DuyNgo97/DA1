<?php
class checkoutDB extends db
{


    //Lay tu` bang san pham
    public function minicart()
    {
        // if (isset($_GET['id'])) {
        //     $id = $_GET['id'];
        $sql = "SELECT * FROM `sanpham`";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
        // }
    }

    //Them vao don hang
    public function insertDH($name, $diachi, $sdt, $ngaytao)
    {
        $check = false;
        $vaitro = 2;
        $ngaytao = getdate("Y,m,d");
        $id_info = $this->insertDH($name, $diachi, $sdt, $ngaytao);
        $sql = "INSERT INTO `userss`(`us_taikhoan`, `us_password`, `id_vaitro`, `id_info`) VALUES ('$name','$diachi',$sdt,$id_info)";
        if (mysqli_query($this->conn, $sql)) {
            $check = true;
        }
        return json_encode($check);
    }
}
