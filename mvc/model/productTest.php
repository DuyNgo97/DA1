<?php

class productTest extends db
{
    // Lấy danh sách sản phẩm
    public function selectAllProduct()
    {
        $sql = "SELECT * FROM sanpham";
        $result = mysqli_query($this->conn, $sql);
        $arr = mysqli_fetch_all($result);

        return json_encode($arr);
    }
}
