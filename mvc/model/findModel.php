<?php 
    class findModel extends db{
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
    }
?>