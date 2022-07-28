<?php 
    class findModel extends db{
        // tim theo ten sp
        public function find(){
            if(isset($_POST['btn-fi'])){
                $ten_sp = $_POST['ten_sp'];
                $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet
                FROM `sanpham` a
                INNER JOIN `hinhanh` b
                ON a.id_hinhanh = b.id_hinhanh
                INNER JOIN `company` c
                ON a.id_company = c.id_company
                INNER JOIN `loai_sp_chi_tiet` d
                ON a.id_loaispct = d.id_loaispct
                WHERE a.ten_sp
                LIKE N'%$ten_sp%' ";
                $result = mysqli_query($this -> conn, $sql);
                if(mysqli_num_rows($result) == 0){
                    return false;
                }else{
                    $arr = mysqli_fetch_all($result);
                    return json_encode($arr);
                }
            }
        }
        // tim theo hang xe
        public function findNC1(){
            if(isset($_POST['btn-fi'])){
                $hangxe = $_POST['hangxe'];
                $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet
                        FROM `sanpham` a
                        INNER JOIN `hinhanh` b
                        ON a.id_hinhanh = b.id_hinhanh
                        INNER JOIN `company` c
                        ON a.id_company = c.id_company
                        INNER JOIN `loai_sp_chi_tiet` d
                        ON a.id_loaispct = d.id_loaispct
                        WHERE a.ten_sp
                        LIKE N'%$hangxe%' ";
                $result = mysqli_query($this -> conn, $sql);
                if(mysqli_num_rows($result) == 0){
                    return false;
                }else{
                    $arr = mysqli_fetch_all($result);
                    return json_encode($arr);
                }
            }
        }
        // tim theo loai sp
        public function findNC2(){
            if(isset($_POST['btn-fi'])){
                $loaisp = $_POST['loaisp'];
                $sql = "SELECT a.* , b.ten_loaisp
                        FROM `sanpham` a
                        INNER JOIN `loaisp` b
                        ON a.id_loaisp = b.id_loaisp
                        WHERE b.ten_loaisp
                        LIKE N'%$loaisp%'";
                $result = mysqli_query($this -> conn, $sql);
                if(mysqli_num_rows($result) == 0){
                    return false;
                }else{
                    $arr = mysqli_fetch_all($result);
                    return json_encode($arr);
                }
            }
        }
        // tim theo gia
        public function findNC3(){
            
        }
    }
?>