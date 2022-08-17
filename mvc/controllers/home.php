<?php

class home extends controller
{
    public function sayhi()
    {
        //model

        $model = $this->model('adminPro');

        //view
        $this->view(
            "home",
            [
                "sp1" => $model->selectXe('5'),
                "sp2" => $model->selectXe('6'),
                "sp3" => $model->selectXe('11'),
                "sp4" => $model->selectXe('13'),
                "arrComPaNy" => $model->selectloaiComPaNy(),
                "arrColor" => $model->selectColor(),
                "arrloaispct" => $model->selectloaiSPCT(),
                "arrDanhMuc" => $model->danhMuc(),
            ]
        );
    }

    public function findeIndex()
    {
        if (isset($_POST['btn-find-index'])) {

            //model
            $model = $this->model('productdb');
            $a = $this->model('findModel');

            //find company & the loai

            if ($_POST['color'] == 0 && $_POST['company'] != 0 && $_POST['theloaict'] != 0) {
                $company = $_POST['company'];
                $theloai = $_POST['theloaict'];
                $arr = $a->findCPTL($company, $theloai);
                $this->view("findindex", [
                    "category" => "category",
                    "viewpart" => "findShow",
                    'sanpham' => $arr,
                ]);
            }

            // find color & the loai

            if ($_POST['color'] != 0 && $_POST['company'] == 0 && $_POST['theloaict'] != 0) {
                $color = $_POST['color'];
                $theloai = $_POST['theloaict'];
                $arr = $a->findCLTL($color, $theloai);
                $this->view("findindex", [
                    "category" => "category",
                    "viewpart" => "findShow",
                    'sanpham' => $arr,
                ]);
            }

            // find color & company

            if ($_POST['color'] != 0 && $_POST['company'] != 0 && $_POST['theloaict'] == 0) {
                $color = $_POST['color'];
                $company = $_POST['company'];
                $arr = $a->findCLCP($color, $company);
                $this->view("findindex", [
                    "category" => "category",
                    "viewpart" => "findShow",
                    'sanpham' => $arr,
                ]);
            }

            if ($_POST['color'] != 0) {
                $color = $_POST['color'];
                $arr = $a->findColor($color);
                //view
                $this->view("findindex", [
                    "category" => "category",
                    "viewpart" => "findShow",
                    "arrCategory" => $model->getCategory(),
                    'sanpham' => $arr,
                ]);
            }
            if ($_POST['company'] != 0) {
                $company = $_POST['company'];
                $arr = $a->findCompany($company);
                //view
                $this->view("findindex", [
                    "category" => "category",
                    "viewpart" => "findShow",
                    "arrCategory" => $model->getCategory(),
                    'sanpham' => $arr,
                ]);
            }
            if ($_POST['theloaict'] != 0) {
                $theloai = $_POST['theloaict'];
                $arr = $a->findtheloaict($theloai);
                //view
                $this->view("findindex", [
                    "category" => "category",
                    "viewpart" => "findShow",
                    "arrCategory" => $model->getCategory(),
                    'sanpham' => $arr,
                ]);
            }

            if ($_POST['color'] == 0 && $_POST['company'] == 0 && $_POST['theloaict'] == 0) {
                $arr = $a->findAll();
                //view
                $this->view("findindex", [
                    "category" => "category",
                    "viewpart" => "findShow",
                    "arrCategory" => $model->getCategory(),
                    'sanpham' => $arr,
                ]);
            }
        }
    }

    // dang xuat

    public function dangxuat()
    {
        // unset($_SESSION['user']);
        session_destroy();
        // $a = $this -> model('sanpham');
        // $b = $this -> model ('danhmuc');

        //view
        $this->view(
            "login",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
        );
    }
}
