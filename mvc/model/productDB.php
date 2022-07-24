<?php

class productdb extends db
{
    // Lấy danh mục
    public function getCategory()
    {
        $sql_category = "SELECT `id_loaisp`, `ten_loaisp` FROM `loaisp`";
        $query_category = mysqli_query($this->conn, $sql_category);
        $arrCategory = mysqli_fetch_all($query_category);
        return json_encode($arrCategory);
    }

    public function getSp($id)
    {
        $sql_category = "SELECT a.*, b.url_main
        FROM `sanpham` a 
        INNER JOIN hinhanh b
        ON a.id_hinhanh = b.id_hinhanh
        WHERE `id_loaisp` = $id
        ";
        $query_category = mysqli_query($this->conn, $sql_category);
        $arrCategory = mysqli_fetch_all($query_category);
        return json_encode($arrCategory);
    }
}
