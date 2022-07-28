<?php
class checkoutDB extends db
{
    public function insertDonHang($idUS,$total,$trangthai,$thanhtoan,$a,$sdt,$note){
        $sql = "INSERT INTO `donhang`(`us_id`, `total`, `trangthai`, `hinhthucTT`, `ngaytao_donhang`, `SDT`, `note`)
         VALUES ($idUS,'$total',$trangthai,$thanhtoan,'$a','$sdt','$note')";
        $result = mysqli_query($this -> conn, $sql);
        $id = mysqli_insert_id($this->conn);
        return $id;
    }
    
    public function insertDHCT($arrSP,$idUS,$total,$trangthai,$thanhtoan,$a,$sdt,$note){
        $check = false;
        $idDH = $this -> insertDonHang($idUS,$total,$trangthai,$thanhtoan,$a,$sdt,$note);
        foreach ($arrSP as $key => $sp) {
            $sql = "INSERT INTO `donhangchitiet`(`id_donhang`, `id_sp`, `soluong_sp`) VALUES ($idDH,$sp[id],$sp[quantity])";
            if(mysqli_query($this -> conn,$sql)){
               $check = true; 
            }
        }
        unset($_SESSION['cart']);
        return $check;
    }
}