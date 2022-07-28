<?php

class product extends controller

{
    public function sayhi()
    {
        // model
        $model = $this->model('productdb');
        //view
        $this->view(
            "product",
            [
                "category" => "category",
                "viewpart" => "show",
                "arrCategory" => $model->getCategory(),
            ]
        );
    }

    public function all($trang)
    {
        // model
        $model = $this->model('productdb');
        //view
        $this->view(
            "product",
            [
                "category" => "category",
                "viewpart" => "show",
                "arrCategory" => $model->getCategory(),
                "arrallsp" => $model->getAllSp($trang),
                "slsp" => $model -> slspAll(),
            ]
        );
    }

    public function changeSP($id,$trang)
    {
        $idtheloai = $id;
        // model
        $model = $this->model('productdb');
        //view
        $this->view(
            "product",
            [
                "category" => "category",
                "viewpart" => "show",
                "arrCategory" => $model->getCategory(),
                "sanpham" => $model->getSp($id,$trang),
                "slsp" => $model -> slsp($id), 
                "idtl" => $idtheloai,
                // "arrCategoryPk" => $model->getCategoryPk(),
            ]
        );
    }
}