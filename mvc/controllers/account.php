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
                "donhang" => $model->getDonHangUS($id),
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
    public function UpdatePass()
    {
        $model = $this->model('user');
        if (isset($_POST['submit'])) {
            $id = $_SESSION['idUS'];

            if (isset($_POST['pswo']) && isset($_POST['pswn']) && isset($_POST['pswr'])) {
                function validate($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                $pswo = validate($_POST['pswo']);
                $password = validate($_POST['pswn']);
                $pswr = validate($_POST['pswr']);
                

                if (empty($pswo)) {
                    echo "<script>alert('Mật khẩu cũ không được để trống!!');window.location='changepass'; </script>";
                    exit();
                } else if (empty($password)) {
                    echo "<script>alert('Mật khẩu mới không được để trống!!');window.location='changepass'; </script>";
                    exit();
                } else if ($password !== $pswr) {
                    echo "<script>alert('Mật khẩu nhập lại không khớp!!');window.location='changepass'; </script>";
                    exit();
                }
                //view
                $this->view("account", [
                    "viewpart" => "changepass",
                    "id" => $id,
                    "checkpass" => $model->Checkpass($id, $pswo, $password),
                    // "check" => $model->UpdatePass($id, $password),
                    "arrEd" => $model->EditAC($id),
                ]);
            }
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
                "arrEd" => $model->EditAC($id),
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
                "arrEd" => $model->EditAC($id),
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
                "arrEd" => $model->EditAC($id),
            ]);
        }
    }
}
