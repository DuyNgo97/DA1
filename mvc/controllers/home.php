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
    }

?>