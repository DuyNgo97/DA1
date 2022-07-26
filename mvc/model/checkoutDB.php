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
        $sql = "INSERT INTO `donhang`(`id_donhang`, `diachi`, `SDT`, `ngaytao_donhang`,`us_id`,`id_voucher`,`total`,`trangthai`,`hinhthucTT`) 
        VALUES ('1','1123','049332','2022/04/20','2','2','200','1','2')";
        if (mysqli_query($this->conn, $sql)) {
            $check = true;
        }
        return json_encode($check);
    }
}
