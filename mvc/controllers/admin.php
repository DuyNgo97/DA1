<?php

    class admin extends controller{
        public function sayhi(){
            //model
            //view
            $this -> view("admin",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
    }

?>