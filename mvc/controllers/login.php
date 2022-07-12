<?php

    class login extends controller{
        public function sayhi(){
            //model
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