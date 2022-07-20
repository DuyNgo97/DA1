<?php
    class user extends db{
        
        //Lay id_info

        public function id_info($name, $sdt){
            $sql = "SELECT * FROM `infor` WHERE `name` = '$name' AND `sdt` = '$sdt'";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_assoc($result);
            return $arr['id_info'];
        }

        // insert information
        public function insertInfo($name,$email,$diachi,$sdt,$ngaytao){
            $sql = "INSERT INTO `infor`(`name`, `email`, `diachi`, `sdt`, `ngaytao`) VALUES ('$name','$email','$diachi','$sdt','$ngaytao')";
            if(mysqli_query($this -> conn,$sql)){
                $a = $this -> id_info($name,$sdt);
                return $a;
            }            
        }

        // Dang ki
        public function dangky($taikhoan,$password,$name,$email,$diachi,$sdt,$ngaytao){
            $check = false;
            $vaitro = 2;
            $id_info = $this -> insertInfo($name,$email,$diachi,$sdt,$ngaytao);
            $sql = "INSERT INTO `userss`(`us_taikhoan`, `us_password`, `id_vaitro`, `id_info`) VALUES ('$taikhoan','$password',$vaitro,$id_info)";
            if(mysqli_query($this -> conn, $sql)){
                $check = true;
            }
            return json_encode($check);
        }

        // Login
        public function dangnhap($taikhoan,$password){
            $check = false;
            $sql = "SELECT * FROM `userss` WHERE `us_taikhoan`= '$taikhoan' AND `us_password` = '$password'";
            $a = mysqli_query($this->conn,$sql);
            if($a){
                if(mysqli_num_rows($a) != 0){
                    $check = true; 
                }
            }
            return json_encode($check);
        }

        // Vai tro
        
            public function vaitro($taikhoan,$password){
                $sql2 = "SELECT a.us_id,b.name_vaitro,c.name FROM `userss` a
                INNER JOIN `vaitro` b
                ON a.id_vaitro = b.id_vaitro
                INNER JOIN `infor` c
                ON a.id_info = c.id_info
                WHERE `us_taikhoan` = '$taikhoan' AND `us_password` = '$password'";
                $result2 = mysqli_query($this -> conn,$sql2);
                $arr = mysqli_fetch_all($result2);
                return json_encode($arr);
            }

        //user
            public function selectAllUser(){
                $sql = "SELECT a.us_id,a.us_taikhoan,a.us_password,b.name_vaitro,c.name,c.email,c.diachi,c.ngaytao,c.sdt 
                FROM userss a INNER JOIN vaitro b 
                ON a.us_id = b.id_vaitro 
                INNER JOIN infor c 
                ON a.us_id = c.id_info";
                $result = mysqli_query($this -> conn,$sql);
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }

            public function Edit(){
                $sql ="SELECT a.us_id,a.us_taikhoan,a.us_password,b.email,b.sdt FROM userss a 
                INNER JOIN infor b 
                ON a.us_id = b.id_info where us_id = 1";
                $result = mysqli_query($this -> conn,$sql);
                $arr = mysqli_fetch_assoc($result);
                return json_encode($arr);
            }

            public function Update(){
                
            }
    }
?>