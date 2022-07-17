<?php
    class adminPro extends db{

        //select all sản phẩm
        public function selectAllPro(){
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,b.name_color,a.soluong_sp,a.giamgia,
            c.name_trangthai,a.mota,a.ngaytao,a.ngaycapnhat,
            d.ten_company, e.ten_loaisp, f.name_chitiet,
            g.url_main, g.url1,g.url2,g.url3,g.url4
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
            ON a.id_hinhanh = g.id_hinhanh";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        //lấy color
        public function selectColor(){
            $sql = "SELECT * FROM `color`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function selectTheLoai(){
            $sql = "SELECT * FROM `loaisp`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function selectloaiSPCT(){
            $sql="SELECT * FROM `loai_sp_chi_tiet`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function selectloaiComPaNy(){
            $sql="SELECT * FROM `company`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function trangThai(){
            $sql="SELECT * FROM `trangthai`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }
    }
?>