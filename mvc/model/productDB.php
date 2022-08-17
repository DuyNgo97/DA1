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

    public function getSp($id, $trang)
    {
        $sosp = "6";
        $begin = ($trang - 1) * $sosp;
        $sql_category = "SELECT a.*, b.url_main, c.*, d.* FROM `sanpham` a 
        INNER JOIN hinhanh b ON a.id_hinhanh = b.id_hinhanh 
        INNER JOIN loai_sp_chi_tiet c ON a.id_loaispct = c.id_loaispct 
        INNER JOIN company d ON a.id_company = d.id_company
        WHERE `id_loaisp` = $id ORDER BY a.id_sp limit $begin,$sosp";
        $query_category = mysqli_query($this->conn, $sql_category);
        $arrCategory = mysqli_fetch_all($query_category);
        return json_encode($arrCategory);
    }
    public function getAllSp($trang)
    {
        $sosp = "6";
        $begin = ($trang - 1) * $sosp;
        $sql = "SELECT a.*, b.url_main, c.*, d.* FROM `sanpham` a 
        INNER JOIN hinhanh b ON a.id_hinhanh = b.id_hinhanh 
        INNER JOIN loai_sp_chi_tiet c ON a.id_loaispct = c.id_loaispct 
        INNER JOIN company d ON a.id_company = d.id_company ORDER BY a.id_sp DESC LIMIT $begin,$sosp";
        $query = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($query);
        return json_encode($arr);
    }

    public function totalSP()
    {
        $sql = "SELECT * FROM `sanpham`";
        if (mysqli_query($this->conn, $sql)) {
            $total = mysqli_num_rows(mysqli_query($this->conn, $sql));
        }
        return $total;
    }

    public function chart2()
    {
        $sql = "SELECT a.id_loaisp, COUNT(*) as 'Total' FROM `sanpham` a 
        GROUP BY a.id_loaisp";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            $arr = mysqli_fetch_all($result);
        }
        return json_encode($arr);
    }

    public function selectSPCT($idsp)
    {
        $sql = "SELECT c.name_chitiet 
        FROM `sanpham` a 
        INNER JOIN loai_sp_chi_tiet c
        ON a.id_loaispct = c.id_loaispct
        WHERE a.id_sp = $idsp";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return $arr;
    }

    public function selectSPTT($idsp)
    {
        $arrtheloai = $this->selectSPCT($idsp);
        $theloai = $arrtheloai[0][0];
        $sql = "SELECT b.gia_sp,c.url_main,b.ten_sp,b.id_sp
        FROM `loai_sp_chi_tiet` a
        INNER JOIN sanpham b
        ON a.id_loaispct = b.id_loaispct
        INNER JOIN hinhanh c
        ON c.id_hinhanh = b.id_hinhanh WHERE a.name_chitiet = '$theloai'";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }

    public function selectOneSP($idsp)
    {
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
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }

    public function slsp($id)
    {
        $sql_category = "SELECT a.*, b.url_main, c.*, d.* FROM `sanpham` a 
        INNER JOIN hinhanh b ON a.id_hinhanh = b.id_hinhanh 
        INNER JOIN loai_sp_chi_tiet c ON a.id_loaispct = c.id_loaispct 
        INNER JOIN company d ON a.id_company = d.id_company
        WHERE `id_loaisp` = $id ORDER BY a.id_sp";
        $query_category = mysqli_query($this->conn, $sql_category);
        $sl = mysqli_num_rows($query_category);
        return $sl;
    }

    public function slspAll()
    {
        $sql_category = "SELECT a.*, b.url_main, c.*, d.* FROM `sanpham` a 
        INNER JOIN hinhanh b ON a.id_hinhanh = b.id_hinhanh 
        INNER JOIN loai_sp_chi_tiet c ON a.id_loaispct = c.id_loaispct 
        INNER JOIN company d ON a.id_company = d.id_company
        ORDER BY a.id_sp";
        $query_category = mysqli_query($this->conn, $sql_category);
        $sl = mysqli_num_rows($query_category);
        return $sl;
    }

    // comment san pham

    //check user mua hang

    public function checkUSbuy($idUS, $idsp)
    {
        $check = false;
        $sql = "SELECT * 
        FROM `donhangchitiet` a
        INNER JOIN sanpham b
        ON a.id_sp = b.id_sp
        WHERE a.id_us = '$idUS' and a.id_sp = '$idsp'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) != 0) {
            $check = true;
        }

        return $check;
    }

    public function comment($idUS, $idsp, $comment, $date)
    {
        $check = false;
        if ($this->checkUSbuy($idUS, $idsp)) {
            $sql = "INSERT INTO `danhgia`(`us_id`, `id_sp`, `binhluan`, `date`) 
            VALUES ($idUS,$idsp,'$comment','$date')";
            $result = mysqli_query($this->conn, $sql);
            if ($result) {
                $check = true;
            }
        }
        return $check;
    }

    public function selectCommentAll($idsp)
    {
        $sql = "SELECT c.name,d.name_vaitro,c.url_img,a.binhluan,a.date,a.id_sp
        FROM `danhgia` a
        INNER JOIN userss b
        ON a.us_id = b.us_id
        INNER JOIN infor c
        ON c.id_info = b.id_info
        INNER JOIN vaitro d
        ON d.id_vaitro = b.id_vaitro
        WHERE id_sp = '$idsp'
        ORDER BY date DESC
        ";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }

    // select sản phẩm theo danh mục

    public function selectSPwithDM($idDM, $trang)
    {
        // $sosp = "6";
        // $begin = ($trang - 1) * $sosp;
        $sql_category = "SELECT a.*, b.url_main, c.*, d.* FROM `sanpham` a 
        INNER JOIN hinhanh b ON a.id_hinhanh = b.id_hinhanh 
        INNER JOIN loai_sp_chi_tiet c ON a.id_loaispct = c.id_loaispct 
        INNER JOIN company d ON a.id_company = d.id_company
        WHERE `id_danhmuc` = $idDM ORDER BY a.id_sp";
        $query_category = mysqli_query($this->conn, $sql_category);
        $arrCategory = mysqli_fetch_all($query_category);
        return json_encode($arrCategory);
    }

    // số lượng sản phẩm theo danh mục

    public function slspWithDM($idDM)
    {
        $sql_category = "SELECT a.*, b.url_main, c.*, d.* FROM `sanpham` a 
        INNER JOIN hinhanh b ON a.id_hinhanh = b.id_hinhanh 
        INNER JOIN loai_sp_chi_tiet c ON a.id_loaispct = c.id_loaispct 
        INNER JOIN company d ON a.id_company = d.id_company
        WHERE `id_danhmuc` = $idDM ORDER BY a.id_sp";
        $query_category = mysqli_query($this->conn, $sql_category);
        $sl = mysqli_num_rows($query_category);
        return $sl;
    }
}
