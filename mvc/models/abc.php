<?php

class abc extends db
{
    public function DL()
    {
        $sql = "SELECT * FROM `tbl_cate`";
        $result = mysqli_query($this -> conn,$sql);
        $arr = mysqli_fetch_all($result);
        return json_encode($arr);
    }
}

?>