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

    // Lấy danh mục xe chi tiết
    public function getCategoryXe()
    {
        $sql = "SELECT `id_loaispct`, `name_chitiet`, `link_spct` FROM `loai_sp_chi_tiet` WHERE `id_loaispct` IN (5, 6, 7, 8); ";
        $result = mysqli_query($this->conn, $sql);
        $arrCategoryXe = mysqli_fetch_all($result);
        return json_encode($arrCategoryXe);
    }

    public function getCategoryPk()
    {
        $sql = "SELECT `id_loaispct`, `name_chitiet`, `link_spct` FROM `loai_sp_chi_tiet` WHERE `id_loaispct` IN (9, 10, 11, 12, 13, 14); ";
        $result = mysqli_query($this->conn, $sql);
        $arrCategoryPk = mysqli_fetch_all($result);
        return json_encode($arrCategoryPk);
    }

    // Lấy danh mục phụ kiện chi tiết


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