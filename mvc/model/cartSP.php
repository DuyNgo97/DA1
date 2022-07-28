<?php
    class cartSP extends db{
        public function getColor(){
            $sql = "SELECT * FROM `color`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return $arr;
        }
    }
?>