<?php

    class home extends controller{
        public function sayhi(){
            //model

            $model = $this -> model('adminPro');

            //view
            $this -> view("home",
            [
                "sp1" => $model -> selectXe('5'),
                "sp2" => $model -> selectXe('6'),
                "sp3" => $model -> selectXe('11'),
                "sp4" => $model -> selectXe('13'),
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