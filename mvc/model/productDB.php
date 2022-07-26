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
        $sql_category = "SELECT a.*, b.url_main, c.*, d.* FROM `sanpham` a 
        INNER JOIN hinhanh b ON a.id_hinhanh = b.id_hinhanh 
        INNER JOIN loai_sp_chi_tiet c ON a.id_loaispct = c.id_loaispct 
        INNER JOIN company d ON a.id_company = d.id_company
        WHERE `id_loaisp` = $id ORDER BY a.id_sp limit 9";
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

    public function selectSPCT($idsp){
        $sql = "SELECT c.name_chitiet 
        FROM `sanpham` a 
        INNER JOIN loai_sp_chi_tiet c
        ON a.id_loaispct = c.id_loaispct
        WHERE a.id_sp = $idsp";
        $result = mysqli_query($this -> conn, $sql);
        $arr = mysqli_fetch_all($result);
        return $arr;
    }

    public function selectSPTT($idsp){
        $arrtheloai = $this -> selectSPCT($idsp);
        $theloai = $arrtheloai[0][0];
        $sql = "SELECT b.gia_sp,c.url_main,b.ten_sp,b.id_sp
        FROM `loai_sp_chi_tiet` a
        INNER JOIN sanpham b
        ON a.id_loaispct = b.id_loaispct
        INNER JOIN hinhanh c
        ON c.id_hinhanh = b.id_hinhanh WHERE a.name_chitiet = '$theloai'";
        $result = mysqli_query($this -> conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }

    public function selectOneSP($idsp){
        $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,b.name_color,a.soluong_sp,a.giamgia,
        c.name_trangthai,a.mota,a.ngaytao,a.ngaycapnhat,
        d.ten_company, e.ten_loaisp, f.name_chitiet,
        g.url_main, g.url1,g.url2,g.url3,g.url4,a.id_hinhanh
        FROM sanpham a
        INNER JOIN color b
        ON a.id_color = b.id_color
        INNER JOIN trangthai c
        ON a.id_trangthai = c.id_trangthai
        INNER JOIN company d
        ON a.id_company = d.id_company
        INNER JOIN loaisp e
        ON a.id_loaisp = e.id_loaisp
        INNER JOIN loai_sp_chi_tiet f
        ON a.id_loaispct = f.id_loaispct
        INNER JOIN hinhanh g
        ON a.id_hinhanh = g.id_hinhanh
        WHERE a.id_sp = '$idsp'";
        $result = mysqli_query($this -> conn,$sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }
}