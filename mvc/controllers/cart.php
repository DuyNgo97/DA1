<?php

    class cart extends controller{
        public function sayhi(){
            //model
            //view
            $this -> view("cart",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
    }

?>