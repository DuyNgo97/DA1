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
}