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

    public function getAllSp()
    {
        $sql = "SELECT a.*, b.url_main, c.*, d.* FROM `sanpham` a 
        INNER JOIN hinhanh b ON a.id_hinhanh = b.id_hinhanh 
        INNER JOIN loai_sp_chi_tiet c ON a.id_loaispct = c.id_loaispct 
        INNER JOIN company d ON a.id_company = d.id_company ORDER BY a.id_sp DESC LIMIT 9; ";
        $query = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($query);
        return json_encode($arr);
    }

    public function getSp($id)
    {
        $sql_category = "SELECT a.*, b.url_main, c.*, d.* FROM `sanpham` a 
        INNER JOIN hinhanh b ON a.id_hinhanh = b.id_hinhanh 
        INNER JOIN loai_sp_chi_tiet c ON a.id_loaispct = c.id_loaispct 
        INNER JOIN company d ON a.id_company = d.id_company
        WHERE `id_loaisp` = $id ORDER BY a.id_sp limit 9";
        $query_category = mysqli_query($this->conn, $sql_category);
        $arrCategory = mysqli_fetch_all($query_category);
        return json_encode($arrCategory);
    }

    // public function demsp()
    // {
    //     $sql = "SELECT COUNT(*) AS id_sp FROM sanpham";
    //     $query_count = mysqli_query($this->conn, $sql);
    //     $count = mysqli_fetch_all($query_count);
    //     return json_encode($count);
    // }

    // public function demspoto()
    // {
    //     $sql = "SELECT COUNT(*) AS id_sp FROM sanpham WHERE id_loaisp IN (1)";
    //     $query_countoto = mysqli_query($this->conn, $sql);
    //     $countoto = mysqli_fetch_all($query_countoto);
    //     return json_encode($countoto);
    // }

    // public function demspphukien()
    // {
    //     $sql = "SELECT COUNT(*) AS id_sp FROM sanpham WHERE id_loaisp IN (2)";
    //     $query_countpk = mysqli_query($this->conn, $sql);
    //     $countpk = mysqli_fetch_all($query_countpk);
    //     return json_encode($countpk);
    // }
}
