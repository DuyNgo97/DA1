<?php

    class cart extends controller{
        public function sayhi(){
            //model
            //view
            $model = $this -> model('cartSP');

            $this -> view("cart",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
                'arrCL' => $model -> getColor(),    

            ]
            );
        }

        public function addToCart(){

            //model
            $model = $this -> model('cartSP');
            if(isset($_POST['btn-addToCart'])){
                if(isset($_SESSION['cart'])){
                    $check = true;
                    foreach ($_SESSION['cart'] as $key => $cart) {
                        if($_SESSION['cart'][$key]['id'] == $_POST['id'] && $_SESSION['cart'][$key]['color'] == $_POST['colorsp']){
                            $check = false;
                            $_SESSION['cart'][$key]['quantity'] = $_SESSION['cart'][$key]['quantity'] + $_POST['soluong'];
                        }
                    }
                    if($check){
                        $item = array(
                            'id' => $_POST['id'],
                            'name' => $_POST['name'],
                            'price' => $_POST['price'],
                            'note' => $_POST['note'],
                            'company' => $_POST['company'],
                            'theloai' => $_POST['theloai'],
                            'color' => $_POST['colorsp'],
                            'giamgia' => $_POST['giamgia'],
                            'quantity' => $_POST['soluong'],
                            'img' => $_POST['img'],
                        );
                        $_SESSION['cart'][] = $item;
                    }
                }else{
                    $item = array(
                        'id' => $_POST['id'],
                        'name' => $_POST['name'],
                        'price' => $_POST['price'],
                        'note' => $_POST['note'],
                        'company' => $_POST['company'],
                        'theloai' => $_POST['theloai'],
                        'color' => $_POST['colorsp'],
                        'giamgia' => $_POST['giamgia'],
                        'quantity' => $_POST['soluong'],
                        'img' => $_POST['img'],

                    );
                    $_SESSION['cart'][] = $item;
                }
            }else if(isset($_POST['btn-capnhat'])){
                if(isset($_POST['color'])){
                    $color = $_POST['color'];
                    foreach ($color as $kcl => $cl) {
                        foreach($_POST['sl'] as $key => $sl){
                            foreach ($_SESSION['cart'] as $ss => $spc) {
                                if($spc['id'] == $key){
                                    $_SESSION['cart'][$ss]['quantity'] = $sl;
                                }
                            }
                        }
                    }     
                }      
            }
            $this -> view('cart',[
                    'arrCL' => $model -> getColor(),    
            ]);
        }

        public function deleteCart($id,$color){
            $model = $this -> model('cartSP');
            
            foreach ($_SESSION['cart'] as $key => $cart) {
                if($cart['id'] == $id && $cart['color'] == $color){
                    unset($_SESSION['cart'][$key]);
                }
            }

            $this -> view('cart',[
                'arrCL' => $model -> getColor(),    
        ]);
        }
    }

?>