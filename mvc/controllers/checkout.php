<?php

    class checkout extends controller{
        public function sayhi(){
            //model
            //view
            $this -> view("checkout",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
    }

?>