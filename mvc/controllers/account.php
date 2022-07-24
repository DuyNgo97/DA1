<?php

    class account extends controller{
        public function sayhi(){
            //model
            //view
            $this -> view("account",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
    }

?>