<?php

    class find_item extends controller{
        public function sayhi(){
            //model
            // $model = $this -> model("find");
            //view
            $this -> view("find_item",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }

        public function ketqua(){
            //model
            
                $model = $this -> model("findModel");
                //view
                $this -> view("find_item",
                [
                    "viewpart" => "ketqua_timkiem",
                    "timkiem" => $model -> find(),
                    "hangxe" => $model -> findNC1(),
                    "loai" => $model -> findNC2(),
                    // "rice" => $model -> findNC3(),
                    // "arrNV" => $a -> sanphambanchay(),
                    // "arrDM" => $b -> getDM(),
                    // "sanpham" => $a -> selectSP(),
                ]
                );
               
        }
    }

?>