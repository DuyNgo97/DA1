<?php
    class user extends db{
        // Dang ki
        public function dangky($name,$diachi,$taikhoan,$email,$password){
            $check = false;
            $sql = "INSERT INTO `user`(`name_user`, `taikhoan_user`, `password_user`, `email_user`, `vaitro_user`) 
            VALUES ('$name','$taikhoan','$password','$email','USER')";
            if(mysqli_query($this -> conn,$sql)){
                $check = true;
            }
            return json_encode($check);
        }

        // Login
        public function dangnhap($taikhoan,$password){
            $check = false;
            $sql = "SELECT * FROM `user` WHERE `taikhoan_user` = '$taikhoan' and `password_user` = '$password'";
            if($a = mysqli_query($this->conn,$sql)){
                if(mysqli_num_rows($a) != 0){
                    $check = true; 
                }
            }
            return json_encode($check);
        }

        // Vai tro
        public function vaitro($taikhoan){
            $sql = "SELECT * FROM `user` WHERE `taikhoan_user` = '$taikhoan'";
            $result = mysqli_query($this -> conn,$sql);
            if($result){
                $arr = mysqli_fetch_all($result);
            }
            return json_encode($arr);
        }
    }
?>