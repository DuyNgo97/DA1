<?php

    class admin extends controller{
        public function sayhi(){
            //model
            //view
            $this -> view("admin",
            [   "viewpart" => "chart",
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
        public function user(){
            //model
            $model = $this -> model('user');
            //view
            $this -> view("admin",[
                "viewpart" => "adminuser",
                "arrUs" => $model ->selectAllUser(),

            ]);
        }
        public function edituser(){
            $model = $this -> model('user');
            $this -> view("admin",[
                "viewpart" => "edituser",
                "arrEd" =>$model ->Edit(),
            ]);
        }

        public function sanpham(){
            //model
            $model = $this -> model('adminPro');
            //view
            $this -> view("admin",
            [   "viewpart" => "product",
                "arrSP" => $model ->selectAllPro(), 
            ]
            );
        }
        
        public function addsanpham(){
            //model
            $model = $this -> model('adminPro');
            //view
            $this -> view("admin",
            [   "viewpart" => "addsanpham",
                "arrColor" => $model -> selectColor(),
                "arrTheLoai" => $model -> selectTheLoai(),
                "arrloaispct" => $model -> selectloaiSPCT(),
                "arrComPaNy" => $model -> selectloaiComPaNy(),
                "arrTrangThai" => $model ->trangThai(),
            ]
            );
        }
        
        public function resultAddsanpham(){
            
        }
    }

?>