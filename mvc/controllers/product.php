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
            ]
        );
    }
}