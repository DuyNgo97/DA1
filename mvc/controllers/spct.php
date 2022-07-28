<?php

    class spct extends controller{
        
        public function sayhi($idsp){
            
            //model
            $model = $this -> model('productDB');
            $model2 = $this -> model('adminPro');
            //views

            $this -> view('spct',[
                'arrSP' => $model -> selectOneSP($idsp),
                'check' => $model -> selectSPTT($idsp),
                "arrColor" => $model2->selectColor(),
                "arrTheLoai" => $model2->selectTheLoai(),
                "arrloaispct" => $model2->selectloaiSPCT(),
                "arrComPaNy" => $model2->selectloaiComPaNy(),
                "arrTrangThai" => $model2->trangThai(),
            ]);
        }

    }

?>