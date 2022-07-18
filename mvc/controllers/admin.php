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
                "arrEd" => $model ->Edit(),
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
            if(isset($_POST['btn-addsp'])){
                $tensp = $_POST['tensp'];
                $color = $_POST['colorsp'];
                $giasp = $_POST['giasp'];
                $nsx = $_POST['company'];
                $trangthai = $_POST['trangthaisp'];
                $soluong = $_POST['soluongsp'];
                $giamgia = isset($_POST['giamgiasp']) ? $_POST['giamgiasp'] : 0;
                $loaisp = $_POST['theloaisp'];
                $loaispct = $_POST['chitietsp'];
                $ngaytao = $_POST['dateTao'];
                $mota = $_POST['mota'];
                // $company = $_POST['company'];

                $img = $_FILES['image'];
                $img1 = $_FILES['image1'];
                $img2 = $_FILES['image2'];
                $img3 = $_FILES['image3'];
                $img4 = $_FILES['image4'];
            
                //models
                $model = $this -> model('adminPro');
            
                //view
                $this -> view("admin",
                [   "viewpart" => "addsanpham",
                    "arrColor" => $model -> selectColor(),
                    "arrTheLoai" => $model -> selectTheLoai(),
                    "arrloaispct" => $model -> selectloaiSPCT(),
                    "arrComPaNy" => $model -> selectloaiComPaNy(),
                    "arrTrangThai" => $model ->trangThai(),
                    "check" => $model -> insertSanPham($img,$img1,$img2,$img3,$img4,$tensp,$color,$giasp,$nsx,$trangthai,$soluong,$giamgia,$mota,$loaisp,$loaispct,$ngaytao),
                    ]
                );
            }     
        }
    }

?>