<?php

class find_item extends controller
{
    public function sayhi()
    {
        //model
        // $model = $this -> model("find");
        //view
        $this->view(
            "find_item",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
        );
    }

    public function ketqua()
    {
        //model

        $model = $this->model("findModel");
        //view
        $this->view(
            "find_item",
            [
                "viewpart" => "ketqua_timkiem",
                "timkiem" => $model->find(),
                // "hangxe" => $model -> findNC1(),
                // "loai" => $model -> findNC2(),
                // "rice" => $model -> findNC3(),

            ]
        );
    }

    public function clickoto()
    {
        //model

        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart2" => "ketqua_oto",
                "click_oto" => $model->click_oto(),

            ]
        );
    }

    public function clickmer()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart3" => "ketqua_mer",
                "click_mer" => $model->click_mer(),

            ]
        );
    }
    public function clickbmw()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart4" => "ketqua_bmw",
                "click_bmw" => $model->click_bmw(),

            ]
        );
    }
    public function clickaudi()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart5" => "ketqua_audi",
                "click_audi" => $model->click_audi(),

            ]
        );
    }
    public function clickhonda()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart6" => "ketqua_honda",
                "click_honda" => $model->click_honda(),

            ]
        );
    }
    public function clickphutung()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart7" => "ketqua_phutung",
                "click_phutung" => $model->click_phutung(),

            ]
        );
    }
    public function clickguong()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart8" => "ketqua_guong",
                "click_guong" => $model->click_guong(),

            ]
        );
    }
    public function clicklight()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart9" => "ketqua_light",
                "click_light" => $model->click_light(),

            ]
        );
    }
    public function clickcam()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart10" => "ketqua_cam",
                "click_cam" => $model->click_cam(),

            ]
        );
    }
    public function clickN500()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart11" => "ketqua_N500",
                "click_N500" => $model->click_N500(),

            ]
        );
    }
    public function click1t()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart12" => "ketqua_1t",
                "click_1t" => $model->click_1t(),

            ]
        );
    }
    public function clickL1t()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "tim_oto",
            [
                "viewpart13" => "ketqua_L1t",
                "click_L1t" => $model->click_L1t(),

            ]
        );
    }

    // tim kiem ajax

    public function findAj()
    {
        //model
        $model = $this->model("findModel");
        //view
        $this->view(
            "findproduct",
            []
        );
    }
    public function searchAJ()
    {

        //model
        $model = $this->model("findModel");
        $search = $_POST["search_pro"];
        $result = $model->findAJX($search);
        $output = "";
        foreach ($result as $key => $a) {
            $output .= '
            <div class="col-md-8 col-lg-6 col-xl-4" style="margin-top: 10px">
            <div class="card text-black" >
                <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
                <img src="public/images/' . $a['url_main'] . '" alt="Apple Computer" width="396px" height="277px" style="margin-left: 5px;"/>
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">' . $a['ten_sp'] . '</h5>
                        <p class="text-muted mb-4">' . $a['mota'] . '</p>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between">
                            <span>Hãng</span><span>' . $a['ten_company'] . '</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Khuyến mãi</span><span>' . $a['giamgia'] . '</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Thể loại xe</span><span>' . $a['name_chitiet'] . '</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                        <span>Giá sản phẩm:</span>' . number_format($a['gia_sp']) . 'VND<span></span>
                    </div>
                    <div class="product-btn d-flex justify-content-around">
                    <a class="btn buy fs-4" href="cart/addToCart2/' . $a['id_sp'] . '" target="_self">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a class="btn follow fs-4" href="#">
                        <i class="bi bi-suit-heart-fill"></i>
                    </a>
                    <a class="btn view fs-4" href="spct/sayhi/' . $a['id_sp'] . '" target="_self">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>

            ';
        }

        echo $output;
    }
}
