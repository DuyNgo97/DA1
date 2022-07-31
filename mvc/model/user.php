<?php
class user extends db
{

    //Lay id_info

    public function id_info($name, $sdt)
    {
        $sql = "SELECT * FROM `infor` WHERE `name` = '$name' AND `sdt` = '$sdt'";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_assoc($result);
        return $arr['id_info'];
    }

    // insert information
    public function insertInfo($name, $email, $diachi, $sdt, $ngaytao)
    {
        $sql = "INSERT INTO `infor`(`name`, `email`, `diachi`, `sdt`, `ngaytao`) VALUES ('$name','$email','$diachi','$sdt','$ngaytao')";
        if (mysqli_query($this->conn, $sql)) {
            $a = $this->id_info($name, $sdt);
            return $a;
        }
    }

    // Dang ki
    public function dangky($taikhoan, $password, $name, $email, $diachi, $sdt, $ngaytao)
    {
        $check = false;
        $vaitro = 2;
        $id_info = $this->insertInfo($name, $email, $diachi, $sdt, $ngaytao);
        $sql = "INSERT INTO `userss`(`us_taikhoan`, `us_password`, `id_vaitro`, `id_info`) VALUES ('$taikhoan','$password',$vaitro,$id_info)";
        if (mysqli_query($this->conn, $sql)) {
            $check = true;
        }
        return json_encode($check);
    }

    // Login
    public function dangnhap($taikhoan, $password)
    {
        $check = false;
        $sql = "SELECT * FROM `userss` WHERE `us_taikhoan`= '$taikhoan' AND `us_password` = '$password'";
        $a = mysqli_query($this->conn, $sql);
        if ($a) {
            if (mysqli_num_rows($a) != 0) {
                $check = true;
            }
        }
        return json_encode($check);
    }

    // Vai tro

    public function vaitro($taikhoan, $password)
    {
        $sql2 = "SELECT a.us_id,b.name_vaitro,c.name,c.email,c.diachi,c.sdt FROM `userss` a
                INNER JOIN `vaitro` b
                ON a.id_vaitro = b.id_vaitro
                INNER JOIN `infor` c
                ON a.id_info = c.id_info
                WHERE `us_taikhoan` = '$taikhoan' AND `us_password` = '$password'";
        $result2 = mysqli_query($this->conn, $sql2);
        $arr = mysqli_fetch_all($result2);
        return json_encode($arr);
    }

    //user
    public function selectAllUser()
    {
        $sql = "SELECT a.us_id, a.us_taikhoan, a.us_password, b.name_vaitro, c.name, c.email, c.diachi, c.ngaytao, c.sdt
        FROM `userss` a 
        INNER JOIN `vaitro` b ON a.id_vaitro = b.id_vaitro 
        INNER JOIN `infor` c ON a.id_info = c.id_info ";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
        // b.name_vaitro,INNER JOIN vaitro b 
        // ON a.us_id = b.id_vaitro 
    }

    public function totalUS()
    {
        $sql = "SELECT a.us_id,a.us_taikhoan,a.us_password,b.name_vaitro,c.name,c.email,c.diachi,c.ngaytao,c.sdt FROM userss a 
                INNER JOIN vaitro b ON a.id_vaitro= b.id_vaitro 
                INNER JOIN infor c ON a.id_info = c.id_info";
        $result = mysqli_query($this->conn, $sql);
        $total = mysqli_num_rows($result);
        return $total;
    }

    public function Edit($id)
    {
        $sql = "SELECT * FROM `userss`
         WHERE `us_id` = '$id'";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }

    public function Update($id, $password)
    {
        $check = false;
        $sql = "UPDATE `userss` SET `us_password` = '$password' WHERE `us_id` =  '$id'";
        $result = mysqli_query($this->conn, $sql);
        // $arr = mysqli_fetch_assoc($result);
        // return json_encode($arr);
        if ($result) {
            $check = true;
        }
        return $check;
    }
    public function Delete($id)
    {
        $check = false;
        $sql = "DELETE userss.*,infor.* FROM userss JOIN infor ON infor.id_info = userss.id_info WHERE userss.us_id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            $check = true;
        }
        return $check;
    }
    // phân quyền
    public function pq()
    {
        $sql = "SELECT a.us_id , a.us_taikhoan,b.name_vaitro FROM `userss` a 
                INNER JOIN `vaitro` b ON a.id_vaitro = b.id_vaitro WHERE a.id_vaitro in (1,2,3)";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }
    public function vt()
    {
        $sql = "SELECT * FROM `vaitro` where id_vaitro in (2,3)";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }
    public function editpq($id)
    {
        $sql = "SELECT a.us_id , a.us_taikhoan,b.name_vaitro FROM `userss` a 
                INNER JOIN `vaitro` b ON a.id_vaitro = b.id_vaitro WHERE a.id_vaitro in (2,3) AND a.us_id ='$id' ";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }

    public function updatepq($id, $vaitro)
    {
        $check = false;
        $sql = " UPDATE `userss` SET `id_vaitro`= '$vaitro' WHERE us_id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        // $arr = mysqli_fetch_all($result);
        // return json_encode($arr);
        if ($result) {
            $check = true;
        }
        return $check;
    }

    public function UpdateSDT($id, $SDT)
    {
        $check = false;
        $sql = "UPDATE `infor` SET sdt = $SDT WHERE `id_info` =  $id";
        $result = mysqli_query($this->conn, $sql);
        // $arr = mysqli_fetch_assoc($result);
        // return json_encode($arr);
        if ($result) {
            $check = true;
        }
        return $check;
    }

    public function UpdateEmail($id, $Email)
    {
        $check = false;
        $sql = "UPDATE `infor` SET email = '$Email' WHERE `id_info` =  '$id'";
        $result = mysqli_query($this->conn, $sql);
        // $arr = mysqli_fetch_assoc($result);
        // return json_encode($arr);
        if ($result) {
            $check = true;
        }
        return $check;
    }

    public function selectAllUs($id)
    {
        $sql = "SELECT a.us_id, a.us_taikhoan, a.us_password, b.name_vaitro, c.name, c.email, c.diachi, c.ngaytao, c.sdt, c.url_img 
        FROM `userss` a 
        INNER JOIN `vaitro` b ON a.id_vaitro = b.id_vaitro 
        INNER JOIN `infor` c ON a.id_info = c.id_info
        WHERE a.us_id = $id";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
        // b.name_vaitro,INNER JOIN vaitro b 
        // ON a.us_id = b.id_vaitro 
    }

    public function getDonHangUS($idUS)
    {
        $sql = "SELECT a.id_donhang,a.us_id,a.ngaytao_donhang,a.total FROM `donhang` a WHERE `us_id` = '$idUS'";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }

    public function getIdDonHang($idUS)
    {
        $sql = "SELECT * FROM `donhang` WHERE `us_id` = '$idUS'";
        $result = mysqli_query($this->conn, $sql);
        $id = mysqli_insert_id($this->conn);
        return $id;
    }

    public function getDonHangChiTiet($idUS)
    {
        $idDH = $this->getIdDonHang($idUS);
        $sql = "SELECT * FROM `donhangchitiet` WHERE `id_donhang` = '$idUS'";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }

    public function UpdateAva($id, $ava)
    {
        if (isset($_FILES['img'])) {
            $file = $_FILES['img'];
            $ava = $file['name'];
            move_uploaded_file($file['tmp_name'], 'public/images/avatar/'.$file['name']);
          }
        $check = false;
       
        $sql = "UPDATE `infor` SET `url_img` = '$ava' WHERE `id_info` =  '$id'";
        $result = mysqli_query($this->conn, $sql);
        // $arr = mysqli_fetch_assoc($result);
        // return json_encode($arr);
        if ($result) {
            $check = true;
        }
        return $check;
    }
}
