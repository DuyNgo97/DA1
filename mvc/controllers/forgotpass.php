<?php

    class forgotpass extends controller{
        public function sayhi(){
            //model
            // $model = $this -> model('quenmkModel');
            //view
            $this -> view("forgotpass",
            [
                // "arrQMK" => $model -> forgot(),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }

        public function mail(){
                $model = $this -> model('quenmkModel');
                $back = $this -> model('user');

                $this -> view ("testmail",
                [
                    "send" => $model -> content(),
                ]);
                $this -> view ("login",
                [
                    "back" => $back -> dangnhap(),
                ]);
            
        }
    }

?>