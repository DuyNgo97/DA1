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

    public function all()
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
                "arrallsp" => $model->getAllSp(),
            ]
        );
    }

    public function changeSP($id)
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
                "sanpham" => $model->getSp($id),
                // "arrCategoryPk" => $model->getCategoryPk(),
            ]
        );
    }
}
