<?php

class account extends controller
{
    public function sayhi()
    {
        $id = $_SESSION['idUS'];
        //model
        $model = $this->model('user');

        //view
        $this->view(
            "account",
            [
                "viewpart" => "colright",
                "arrUs" => $model->selectAllUs($id),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
                "minipart" => "lichsudonhang",
                "minipart2" => "voucherUS",
                "donhang" => $model-> getDonHangUS($id),
                "voucher" => $model -> getVoucherUS($id),
            ]
        );
    }

    public function edituser($id)
    {
        $i = $id;
        $model = $this->model('user');
        $this->view("account", [
            "viewpart" => "changepass",
            "id" => $i,
            "arrEd" => $model->Edit($id),

        ]);
    }

    //change pass
    public function changepass()
    {
        //model
        $model = $this->model('user');
        $id = $_SESSION['idUS'];
        //view
        $this->view(
            "account",
            [
                "viewpart" => "changepass",
                "arrUs" => $model->selectAllUs($id),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
        );
    }
    public function Update()
    {
        if (isset($_POST['submit'])) {
            $id = $_SESSION['idUS'];
            $password = $_POST['psw'];
            $model = $this->model('user');
            $this->view("account", [
                "viewpart" => "changepass",
                "id" => $id,
                "check" => $model->Update($id, $password),
                "arrEd" => $model->Edit($id),
            ]);
        }
    }

    //change sdt
    public function changesdt()
    {
        //model
        $model = $this->model('user');
        $id = $_SESSION['idUS'];
        //view
        $this->view(
            "account",
            [
                "viewpart" => "changesdt",
                "arrUs" => $model->selectAllUs($id),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
        );
    }

    public function UpdateSDT()
    {
        if (isset($_POST['submit'])) {
            $id = $_SESSION['idUS'];
            $SDT = $_POST['sdt'];
            $model = $this->model('user');
            $this->view("account", [
                "viewpart" => "changesdt",
                "id" => $id,
                "check" => $model->UpdateSDT($id, $SDT),
                "arrEd" => $model->Edit($id),
            ]);
        }
    }


    //change mail
    public function changeemail()
    {
        //model
        $model = $this->model('user');
        $id = $_SESSION['idUS'];
        //view
        $this->view(
            "account",
            [
                "viewpart" => "changeemail",
                "arrUs" => $model->selectAllUs($id),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
        );
    }

    public function UpdateEmail()
    {
        if (isset($_POST['submit'])) {
            $id = $_SESSION['idUS'];
            $Email = $_POST['email'];
            $model = $this->model('user');
            $this->view("account", [
                "viewpart" => "changeemail",
                "id" => $id,
                "check" => $model->UpdateEmail($id, $Email),
                "arrEd" => $model->Edit($id),
            ]);
        }
    }

    // Xem chi tiet don hang user

    public function xemchitiet($id_donhang)
    {
        $idUS = $_SESSION['idUS'];
        //model
        $model = $this->model('user');
        $model2 = $this->model('adminPro');
        $id = $_SESSION['idUS'];
        //view
        $this->view(
            "xemchitietdonhang",
            [
                'arrDH' => $model2->selectOneDH($id_donhang),
            ]
        );
    }

    public function changeava()
    {
        //model
        $model = $this->model('user');
        $id = $_SESSION['idUS'];
        //view
        $this->view(
            "account",
            [
                "viewpart" => "changeava",
                "arrUs" => $model->selectAllUs($id),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
        );
    }

    public function UpdateAva()
    {
        if (isset($_POST['submit'])) {
            $id = $_SESSION['idUS'];
            $file = $_FILES['img'];
            $ava = $file['name'];
            $model = $this->model('user');
            
            $this->view("account", [
                "viewpart" => "changeava",
                "id" => $id,
                "check" => $model->UpdateAva($id, $ava),
                "arrEd" => $model->Edit($id),
            ]);
        }
    }
}