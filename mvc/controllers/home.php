<?php

    class home extends controller{
        public function sayhi(){
            //model
            //view
            $this -> view("home",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }

        // dang xuat

        public function dangxuat(){
            // unset($_SESSION['user']);
            session_destroy();
            // $a = $this -> model('sanpham');
            // $b = $this -> model ('danhmuc');

            //view
            $this -> view("login",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
    }

?>