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
        // public function edituser($id){
        //     if(isset($_POST['btn-sua'])){
        //         // $idu = $_GET['id'];
        //         $id_us = $_POST['idUS'];
        //         $model = $this -> model('user');
                
        //     $this -> view("admin",[
        //         "viewpart" => "edituser",
        //         // "arrEd" =>$model ->Edit(),
        //     ]);
        // }

        public function edituser($id){
            $i = $id;
            // $model = $this -> model('user');

            $this -> view("admin",[
                "viewpart" => "edituser",
                "id" => $i,
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

        public function danhmuc(){
            //model
            $model = $this -> model('adminPro');
            //view

            $this -> view('admin',
            [
                "viewpart" => "danhmucsp",
                "arrDM" => $model -> selectDanhMuc(),
            ]);
        }

        public function addDanhMuc(){
            if(isset($_POST['btn-add'])){
                $tendm =$_POST['name-dm'];

                //model
                    $model = $this -> model('adminPro');
                //view
                $this->view("admin",[
                    "viewpart" => "danhmucsp",
                    "arrDM" => $model -> selectDanhMuc(),
                    "check" => $model -> insertDM($tendm),
                ]);
            }
        }

        public function voucher(){

            //model
            $model = $this -> model('adminPro');

            //view
            $this -> view ("admin",[
                "viewpart" => "vouchersp",
                "arrVC" => $model -> selectVoucher(),
            ]);
        }

        public function Addvoucher(){
            if(isset($_POST['btn-add'])){
                $tenvc = $_POST['name-vc'];
                $mavc = $_POST['ma-vc'];
                $giamgia = $_POST['giamgia'];
                $dateTao = $_POST['date-tao'];
                $dateKT = $_POST['date-ketthuc'];
            //model
            $model = $this -> model('adminPro');
                
            //view
            $this -> view ("admin",[
                "viewpart" => "vouchersp",
                "arrVC" => $model -> selectVoucher(),
                "check" => $model -> insertVoucher($tenvc,$mavc,$giamgia,$dateTao,$dateKT),
            ]);
            
        }
        }
    }

?>