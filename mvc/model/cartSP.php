<?php
    class cartSP extends db{
        public function getColor(){
            $sql = "SELECT * FROM `color`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return $arr;
        }

        public function selectOne($id){
            $sql = "SELECT a.id_sp, a.ten_sp, a.gia_sp,
            a.mota, a.id_company, a.id_loaispct,
            a.id_color, a.giamgia, b.url_main
            FROM `sanpham` a
            INNER JOIN hinhanh b
            ON a.id_hinhanh = b.id_hinhanh
            WHERE a.`id_sp` = '$id'";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            foreach ($arr as $key => $a) {
                $item = array(
                    'id' => $a[0],
                    'name' => $a[1],
                    'price' => $a[2],
                    'note' => $a[3],
                    'company' => $a[4],
                    'theloai' => $a[5],
                    'color' => $a[6],
                    'giamgia' => $a[7],
                    'quantity' => 1,
                    'img' => $a[8],
                );
            }
            return $item;
        }

        public function addSP($id){
            $item = $this -> selectOne($id);
            if(isset($_SESSION['cart'])){
                $check = true;
                foreach ($_SESSION['cart'] as $key => $cart) {
                    if($_SESSION['cart'][$key]['id'] == $item['id'] && $_SESSION['cart'][$key]['color'] == $item['color']){
                        $check = false;
                        $_SESSION['cart'][$key]['quantity'] = $_SESSION['cart'][$key]['quantity'] + $item['quantity'];
                    }
                }
                if($check){
                    $_SESSION['cart'][] = $item;
                }
            }else{
                $_SESSION['cart'][] = $item;
            }
        }

        public function selectVCUS($id){
            $sql = "SELECT  b.code_voucher,b.mucgiam_voucher
            FROM `voucher_chitiet` a
            INNER JOIN voucher b
            ON a.id_voucher = b.id_voucher
            WHERE a.us_id = '$id'";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }
    }
?>