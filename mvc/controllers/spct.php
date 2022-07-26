<?php

    class spct extends controller{
        
        public function sayhi($idsp){
            
            //model
            $model = $this -> model('productDB');

            //views

            $this -> view('spct',[
                'arrSP' => $model -> selectOneSP($idsp),
                'check' => $model -> selectSPTT($idsp),
            ]);
        }

    }

?>