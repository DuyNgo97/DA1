<?php

class admin extends controller
{
    public function sayhi()
    {
        //model
        $model = $this->model('user');
        $model2 = $this->model('productDB');
        $model3 = $this->model('adminPro');
        //view
        $this->view(
            "admin",
            [
                "viewpart" => "chart",
                "totalDH" => $model3->totaldonhang(),
                "totalUS" => $model->totalUS(),
                "totalPD" => $model2->totalSP(),
                "totalVC" => $model3->totalvoucher(),
                "chart2" => $model2->chart2(),
            ]
        );
    }
    public function user()
    {
        //model
        $model = $this->model('user');
        //view
        $this->view("admin", [
            "viewpart" => "adminuser",
            "arrUs" => $model->selectAllUser(),

        ]);
    }

    public function edituser($id)
    {
        $i = $id;
        $model = $this->model('user');
        $this->view("admin", [
            "viewpart" => "edituser",
            "id" => $i,
            "arrEd" => $model->Edit($id),

        ]);
    }
    public function updateuser()
    {
        if (isset($_POST['submit'])) {
            $id = $_POST['us_id'];
            $password = $_POST['psw'];
            $model = $this->model('user');
            $this->view("admin", [
                "viewpart" => "edituser",
                "id" => $id,
                "arrEd" => $model->Edit($id),
                "check" => $model->Update($id, $password),
            ]);
        }
    }

    public function delete($id)
    {
        $model = $this->model('user');
        $this->view("admin", [
            "viewpart" => "adminuser",
            "id" => $id,
            "arrDe" => $model->Delete($id),
            "arrUs" => $model->selectAllUser(),
        ]);
    }

    // phan quyen
    public function pq()
    {
        $model = $this->model('user');
        $this->view("admin", [
            "viewpart" => "pq",
            "arrPq" => $model->pq(),

        ]);
    }
    public function Editpq($id)
    {
        $i = $id;
        $model = $this->model('user');
        $this->view("admin", [
            "viewpart" => "Pqedit",
            "id" => $i,
            "arrEpq" => $model->editpq($id),
            "arrvt" => $model->vt(),


        ]);
    }

    public function Updatepq()
    {
        if (isset($_POST['submit'])) {
            $id = $_POST['us_id'];
            $vaitro = $_POST['vt'];
            $model = $this->model('user');
            $this->view("admin", [
                "viewpart" => "pq",
                "id" => $id,
                "arrEpq" => $model->editpq($id),
                "check" => $model->updatepq($id, $vaitro),
                "arrvt" => $model->vt(),
                "arrPq" => $model->pq(),

            ]);
        }
    }

    public function sanpham()
    {
        //model
        $model = $this->model('adminPro');
        //view
        $this->view(
            "admin",
            [
                "viewpart" => "product",
                "arrSP" => $model->selectAllPro(),
            ]
        );
    }

    public function editSanPham($idsp)
    {

        //model
        $model = $this->model('adminPro');
        //view
        $this->view(
            "admin",
            [
                "viewpart" => "editsp",
                "sanpham" => $model->selectOneSP($idsp),
                "arrColor" => $model->selectColor(),
                "arrTheLoai" => $model->selectTheLoai(),
                "arrloaispct" => $model->selectloaiSPCT(),
                "arrComPaNy" => $model->selectloaiComPaNy(),
                "arrTrangThai" => $model->trangThai(),
            ]
        );
    }

    public function resultEditSP($idsp)
    {
        if (isset($_POST['btn-edit'])) {

            $abc = unserialize($_SESSION['abc']);

            $tensp = $_POST['namesp'];
            $giasp = $_POST['giasp'];
            $color = $_POST['colorsp'];
            $soluong = $_POST['soluongsp'];
            $giamgia = $_POST['giamgia'];
            $trangthai = $_POST['trangthaisp'];
            $nsx = $_POST['company'];
            $loaisp = $_POST['theloaisp'];
            $mota = $_POST['mota'];
            $id_hinhanh = $_POST['idImgOld'];


            $loaispct = $_POST['chitietsp'];
            @$ngaytao = $_POST['date-Tao'];
            $ngaycapnhat = $_POST['dateTao'];

            $test = array();
            $test[] = $nsx;
            $test[] = $loaisp;
            $test[] = $loaispct;
            $test[] = $mota;
            $test[] = $ngaycapnhat;

            $img = $_FILES['image'];
            $img1 = $_FILES['image1'];
            $img2 = $_FILES['image2'];
            $img3 = $_FILES['image3'];
            $img4 = $_FILES['image4'];
            // $abc = unserialize($_POST['abc']);
            //model
            $model = $this->model('adminPro');
            $model->deleteArrIMG($abc);
            //view
            $this->view(
                "admin",
                [
                    "viewpart" => "editsp",
                    "sanpham" => $model->selectOneSP($idsp),
                    "arrColor" => $model->selectColor(),
                    "arrTheLoai" => $model->selectTheLoai(),
                    "arrloaispct" => $model->selectloaiSPCT(),
                    "arrComPaNy" => $model->selectloaiComPaNy(),
                    "arrTrangThai" => $model->trangThai(),
                    "arrIMG" => $abc,
                    "check" => $model->updateSanPham($img, $img1, $img2, $img3, $img4, $tensp, $color, $giasp, $nsx, $trangthai, $soluong, $giamgia, $mota, $loaisp, $loaispct, $ngaycapnhat, $id_hinhanh, $idsp),
                    "test" => $test,
                ]
            );
        }
        // var_dump($abc);
    }

    public function addsanpham()
    {
        //model
        $model = $this->model('adminPro');
        //view
        $this->view(
            "admin",
            [
                "viewpart" => "addsanpham",
                "arrColor" => $model->selectColor(),
                "arrTheLoai" => $model->selectTheLoai(),
                "arrloaispct" => $model->selectloaiSPCT(),
                "arrComPaNy" => $model->selectloaiComPaNy(),
                "arrTrangThai" => $model->trangThai(),
            ]
        );
    }

    public function resultAddsanpham()
    {
        if (isset($_POST['btn-addsp'])) {
            $tensp = $_POST['tensp'];
            $color = $_POST['colorsp'];
            $giasp = $_POST['giasp'];
            $nsx = $_POST['company'];
            $trangthai = $_POST['trangthaisp'];
            $soluong = $_POST['soluongsp'];
            $giamgia = $_POST['giamgiasp'];
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
            $model = $this->model('adminPro');

            //view
            $this->view(
                "admin",
                [
                    "viewpart" => "addsanpham",
                    "arrColor" => $model->selectColor(),
                    "arrTheLoai" => $model->selectTheLoai(),
                    "arrloaispct" => $model->selectloaiSPCT(),
                    "arrComPaNy" => $model->selectloaiComPaNy(),
                    "arrTrangThai" => $model->trangThai(),
                    "check" => $model->insertSanPham($img, $img1, $img2, $img3, $img4, $loaispct, $ngaytao, $tensp, $giasp, $color, $nsx, $trangthai, $soluong, $giamgia, $mota, $loaisp),
                ]
            );
        }
    }

    public function addDanhMuc()
    {
        if (isset($_POST['btn-add'])) {
            $tendm = $_POST['name-dm'];

            //model
            $model = $this->model('adminPro');
            //view
            $this->view("admin", [
                "viewpart" => "danhmucsp",
                "arrDM" => $model->selectDanhMuc(),
                "check" => $model->insertDM($tendm),
            ]);
        }
    }

    public function voucher()
    {

        //model
        $model = $this->model('adminPro');

        //view
        $this->view("admin", [
            "viewpart" => "vouchersp",
            "arrVC" => $model->selectVoucher(),
        ]);
    }

    public function Addvoucher()
    {
        if (isset($_POST['btn-add'])) {
            $tenvc = $_POST['name-vc'];
            $mavc = $_POST['ma-vc'];
            $giamgia = $_POST['giamgia'];
            $dateTao = $_POST['date-tao'];
            $dateKT = $_POST['date-ketthuc'];
            //model
            $model = $this->model('adminPro');

            //view
            $this->view("admin", [
                "viewpart" => "vouchersp",
                "arrVC" => $model->selectVoucher(),
                "check" => $model->insertVoucher($tenvc, $mavc, $giamgia, $dateTao, $dateKT),
            ]);
        }
    }

    public function deleteVoucher($id)
    {
        //model
        $model = $this->model('adminPro');

        //view
        $this->view("admin", [
            "viewpart" => "vouchersp",
            "arrVC" => $model->selectVoucher(),
            "delete" => $model->deleteVC($id),
        ]);
    }

    //Voucher user
    public function selectAllVoucher()
    {
        //model
        $model = $this->model('adminPro');

        //view
        $this->view("admin", [
            "viewpart" => "voucherUS",
            "arrVC" => $model->selectAllVCUS(),
        ]);
    }


    public function danhmuc()
    {
        //model
        $model = $this->model('adminPro');

        //view

        $this->view(
            'admin',
            [
                "viewpart" => "danhmucsp",
                "arrDM" => $model->selectDanhMuc(),
            ]
        );
    }

    public function deleteDM($id)
    {
        //model
        $model = $this->model('adminPro');
        //view

        $this->view(
            'admin',
            [
                "viewpart" => "danhmucsp",
                "arrDM" => $model->selectDanhMuc(),
                "delete" => $model->deleteDM($id),
            ]
        );
    }

    public function typeSP()
    {
        //model 
        $model = $this->model('adminPro');

        //view

        $this->view(
            "admin",
            [
                "viewpart" => "typeSP",
                "arrDM" => $model->selectArr("loai_sp_chi_tiet"),
            ]
        );
    }

    public function addTypeSP()
    {
        if (isset($_POST['btn-add'])) {
            $type = strtoupper($_POST['name-dm']);
            //model

            $model = $this->model('adminPro');

            //view
            $this->view(
                "admin",
                [
                    "viewpart" => "typeSP",
                    "arrDM" => $model->selectArr("loai_sp_chi_tiet"),
                    "check" => $model->insertType($type),
                ]
            );
        }
    }

    public function deleteType($id, $nameType)
    {
        //model

        $model = $this->model('adminPro');

        //view
        $this->view(
            "admin",
            [
                "viewpart" => "typeSP",
                "arrDM" => $model->selectArr("loai_sp_chi_tiet"),
                "delete" => $model->deleteType($id, $nameType),
            ]
        );
    }

    public function quanlidonhang()
    {

        $model = $this->model('adminPro');

        //views
        $this->view('admin', [
            'viewpart' => 'thongkedonhang',
            'arr' => $model->selectDonHang(),
        ]);
    }

    public function xacnhan($id_donhang, $trangthai)
    {
        $model = $this->model('adminPro');
        $model->changeTrangThai($id_donhang, $trangthai);
        //views
        $this->view('admin', [
            'viewpart' => 'thongkedonhang',
            'arr' => $model->selectDonHang(),
            'dh' => $model->thongtindonhang($id_donhang),
            // 'dh' => $model -> soLuongSP(41), 

        ]);
    }

    public function huyXacNhan($id_donhang, $trangthai)
    {
        $model = $this->model('adminPro');
        $model->changeTrangThai($id_donhang, $trangthai);
        //views
        $this->view('admin', [
            'viewpart' => 'thongkedonhang',
            'arr' => $model->selectDonHang(),
            'dh' => $model->thongtindonhang2($id_donhang),
            // 'dh' => $model -> soLuongSP(41), 

        ]);
    }

    public function deleteDonHang($id_donhang)
    {
        $model = $this->model('adminPro');
        $model->deleteDonHang($id_donhang);
        //views
        $this->view('admin', [
            'viewpart' => 'thongkedonhang',
            'arr' => $model->selectDonHang(),
        ]);
    }

    public function thongKeDonHang()
    {
        $model = $this->model('adminPro');
        //views
        $this->view('admin', [
            'viewpart' => 'thongke',
            'totalAll' => $model->numsAlldonhang(),
            'totalChua' => $model->numsChuaXacNnhan(),
            'totalXN' => $model->numsXacNnhan(),
        ]);
    }

    public function toTalMonth()
    {
        $month = $_POST['month'];
        $model = $this->model('adminPro');
        //views
        $this->view('admin', [
            'viewpart' => 'thongke',
            'totalAll' => $model->numsAlldonhang(),
            'totalChua' => $model->numsChuaXacNnhan(),
            'totalXN' => $model->numsXacNnhan(),
            'check' => $model->Month($month),
        ]);
    }

    public function xemchitiet($id_donhang)
    {
        $model = $this->model('adminPro');
        //views
        $this->view('admin', [
            'viewpart' => 'xemchitiet',
            'arrDH' => $model->selectOneDH($id_donhang),
        ]);
    }

    // Chức năng nhập hàng hóa

    public function nhaphang()
    {
        $model = $this->model('adminPro');
        //views
        $this->view('admin', [
            'viewpart' => 'nhapHang',
            'arrHH' => $model->selectSPNhap(),
        ]);
    }

    public function thucHienNhapHang($id)
    {
        $idsp = $id;
        $model = $this->model('adminPro');
        //views
        $this->view('admin', [
            'viewpart' => 'nhapHangChild',
            'arrHH' => $model->selectOneSPNhap($id),
        ]);
    }

    //update so luong hang hoa

    public function updateSoLuong($id)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $idsp = $id;
        $soluong = $_POST['soluong'];
        $dateCapNhat = date("Y-m-d H:i:s");
        $model = $this->model('adminPro');
        if (isset($_POST['btn-xacnhan'])) {
            //views
            $this->view('admin', [
                'viewpart' => 'nhapHang',
                'arrHH' => $model->selectSPNhap(),
                'check' => $model->updateSLSP($idsp, $soluong, $dateCapNhat),
            ]);
        }
    }

    //Phan hồi, bình luận về sản phẩm

    public function binhLuanSP()
    {
        $model = $this->model('adminPro');
        //views
        $this->view('admin', [
            'viewpart' => 'binhluanSP',
            'arrBL' => $model->selectAllBinhLuan(),
        ]);
    }

    public function deleteBL($id)
    {
        $model = $this->model('adminPro');
        //views
        $this->view('admin', [
            'viewpart' => 'binhluanSP',
            'arrBL' => $model->selectAllBinhLuan(),
            'check' => $model->deleteBinhLuan($id),
        ]);
    }

    public function buyOnline()
    {
        $model = $this->model('adminPro');

        $this->view('admin', [
            'viewpart' => 'bienban',
        ]);
    }
}
