<?php

class product extends controller
{
    public function sayhi()
    {
        //model
        //view
        $this->view(
            "product",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
        );
    }

    public function testproduct()
    {
        // model
        $test = $this->model("selectAllProduct");

        // view
        $this->view(
            "product",
            [
                // code
            ]
        );
    }
}
