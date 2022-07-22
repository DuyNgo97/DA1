<?php

class productdb extends db
{
    // Lấy danh mục
    public function getCategory()
    {
        $sql = "SELECT `id_loaisp`, `ten_loaisp`, `link_loaisp` FROM `loaisp`";
        $result = mysqli_query($this->conn, $sql);
        $arrCategory = mysqli_fetch_all($result);
        return json_encode($arrCategory);
    }


    // Lấy danh sách sản phẩm
    // public function selectAllProduct()
    // {
    //     // $sql = "SELECT * FROM sanpham";
    //     // $result = mysqli_query($this->conn, $sql);
    //     // $arr = mysqli_fetch_all($result);

    //     // return json_encode($arr);
    //     echo "Nguyễn Trung Khiêm DB";
    // }
}
