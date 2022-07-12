<?php
class test extends db
{
    public function __get()
    {
        $sql = "SELECT * FROM `test`";
        $kq = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($kq);

        return json_encode($arr);
    }
}
