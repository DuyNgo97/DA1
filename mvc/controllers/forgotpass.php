<?php

    class forgotpass extends controller{
        public function sayhi(){
            //model
            // $model = $this -> model('quenmkModel');
            //view
            $this -> view("forgotpass",
            [
                // "arrQMK" => $model -> forgot(),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }

        public function mail(){
            if(isset($_POST['btn-qmk'])){
                $email = $_POST['email'];
                $model = $this -> model('quenmkModel');
                $back = $this -> model('user');

                $this -> view ("testmail",
                [
                    "send" => $model -> content($email),
                ]);
                // $this -> view ("login",
                // [
                //     "back" => $back -> dangnhap(),
                // ]);
            }  
        }

        public function code(){
            //model
            $model = $this -> model('quenmkModel');
            //view
            
            $this -> view("checkcode",[
                
            ]);
        }

        public function checkCode(){
            //model
            $model = $this -> model('quenmkModel');
            
            if(!empty($_POST['btn-check'])){
                $code = $_POST['code'];
                if($model -> checkCode($code)){
                    echo "<script>alert('Xác thực thành công. Vui lòng tạo password mới !!!');</script>";
                    $this -> view("changePass",[
                        "code" => $code,
                    ]);
                }else{
                    echo "<script>alert('Sai mã code. Vui lòng nhập lại!');</script>";
                    $this -> view("checkcode",[
                
                    ]);  
                }
            }
        }

        public function changePass(){
            //model
            $model = $this -> model('quenmkModel');

            if(isset($_POST['pass']) && isset($_POST['code'])){
                $pass = $_POST['pass'];
                $code = $_POST['code'];
                $model -> updatePass($pass, $code);
                //view
                // $this -> view('changePass',[
                //     "check" => $model -> updatePass($pass, $code),
                // ]);
            }else{
                $this -> view('changePass',[
                ]);
            }
        }
    }
?>