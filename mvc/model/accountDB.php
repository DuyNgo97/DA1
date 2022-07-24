<?php
    class USaccount extends db{

        //get ID
        public function id_info($name, $sdt){
            $sql = "SELECT * FROM `infor` WHERE `name` = '$name' AND `sdt` = '$sdt'";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_assoc($result);
            return $arr['id_info'];
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


    }

?>