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




    
}
