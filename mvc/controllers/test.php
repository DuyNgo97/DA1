<?php
class test extends controller
{
    public function sayhi()
    {
        //model
        $e = $this->model('test');
        //view
        $this->view(
            "test",
            [
                "arr" => $e->__get(),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
        );
    }
}
