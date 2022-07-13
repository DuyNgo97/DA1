<?php

    class checkout_clone extends controller{
        public function sayhi(){
            //model
            //view
            $this -> view("checkout_clone",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
    }

?>