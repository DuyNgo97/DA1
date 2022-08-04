<?php

    class checkout extends controller{
        public function sayhi(){

            $giamgia = $_POST['giamg'];
            $totalall = $_POST['totalall'];  
            //model
            $model = $this -> model('checkoutDB');
            //view
            $this -> view("checkout",
            [
                // "viewpart" => "minicart",
                // "arr" => $model ->minicart(),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
                "giamgia" => $giamgia,
                "totalall" => $totalall, 
            ]
            );
        }
        
        public function thanhtoan(){
            $total = $_POST['total'];
            $idUS = $_SESSION['idUS'];
            $nameUS = $_SESSION['nameUS'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $thanhtoan = $_POST['thanhtoan'];
            $note = $_POST['note'];
            $today = date('Y-m-d');
            $a = $today;
            $trangthai = 0;
            $arrSP = $_SESSION['cart'];
            
            //model

            $model = $this -> model('checkoutDB');
            //view
            $this -> view("tks",
            [
                // 'check' => $model -> insertDonHang($idUS,$total,$trangthai,$thanhtoan,$a,$sdt,$note),
                'check' => $model -> insertDHCT($arrSP,$idUS,$total,$trangthai,$thanhtoan,$a,$sdt,$note,$nameUS,$email),
            ]
            );
        }
    }

?>