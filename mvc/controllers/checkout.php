<?php

    class checkout extends controller{
        public function sayhi(){
            //model
            $model = $this -> model('checkoutDB');
            //view
            $this -> view("checkout",
            [
                "viewpart" => "minicart",
                "arr" => $model ->minicart(),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
        // public function minicart(){
        //     //model
        //     $model = $this -> model('checkoutDB');

        //     //view
        //     $this -> view("checkout",[
        //         "viewpart" => "minicart",
        //         "arr" => $model ->minicart(),

        //     ]);
        // }

    }

?>