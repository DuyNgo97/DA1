<?php

class spct extends controller
{

    public function sayhi($idsp)
    {

        //model
        $model = $this->model('productDB');
        $model2 = $this->model('adminPro');
        //views

        $this->view('spct', [
            'arrSP' => $model->selectOneSP($idsp),
            'check' => $model->selectSPTT($idsp),
            "arrColor" => $model2->selectColor(),
            "arrTheLoai" => $model2->selectTheLoai(),
            "arrloaispct" => $model2->selectloaiSPCT(),
            "arrComPaNy" => $model2->selectloaiComPaNy(),
            "arrTrangThai" => $model2->trangThai(),
            "arrComment" => $model->selectCommentAll($idsp),
        ]);
    }

    public function commentSP()
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = date("d-m-Y H:i:s");
        $idUS = $_POST['idUS'];
        $idsp = $_POST['idSP'];
        $comment = $_POST['comment'];

        //model
        $model = $this->model('productDB');
        $model2 = $this->model('adminPro');
        //views

        $this->view('spct', [
            'arrSP' => $model->selectOneSP($idsp),
            'check' => $model->selectSPTT($idsp),
            "arrColor" => $model2->selectColor(),
            "arrTheLoai" => $model2->selectTheLoai(),
            "arrloaispct" => $model2->selectloaiSPCT(),
            "arrComPaNy" => $model2->selectloaiComPaNy(),
            "arrTrangThai" => $model2->trangThai(),
            'comment' => $model->comment($idUS, $idsp, $comment, $date),
            "arrComment" => $model->selectCommentAll($idsp),
        ]);
    }
}
