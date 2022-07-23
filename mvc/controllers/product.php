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
                "arrCategoryXe" => $model->getCategoryXe(),
                "arrCategoryPk" => $model->getCategoryPk(),
            ]
        );
    }

    public function xeoto()
    {
        // model
        $model = $this->model('productdb');

        // view
        $this->view(
            "product",
            [
                "category" => "category",
                "viewpart" => "xeoto",
                "arrCategory" => $model->getCategory(),
                "arrCategoryXe" => $model->getCategoryXe(),
                "arrCategoryPk" => $model->getCategoryPk(),
            ]
        );
    }

    public function phukien()
    {
        // model
        $model = $this->model('productdb');

        // view
        $this->view(
            "product",
            [
                "category" => "category",
                "viewpart" => "phukien",
                "arrCategory" => $model->getCategory(),
                "arrCategoryXe" => $model->getCategoryXe(),
                "arrCategoryPk" => $model->getCategoryPk(),
            ]
        );
    }
}