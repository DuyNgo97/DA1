<?php

    class login extends controller{
        public function sayhi(){
            //model
            //view
            $this -> view("login",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }


        // dang ky
        public function dangky(){
            // Lấy ngày hiện tại
            $today = date('Y-m-d');
            $ngaytao = $today;
            if(isset($_POST['btn-dangky'])){

                $name = $_POST['name'];
                $diachi = $_POST['diachi'];
                $taikhoan = $_POST['taikhoan'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                //$password = password_hash($password,PASSWORD_DEFAUL);
                $sdt = $_POST['sdt'];
    
                    //model
    
                    $a = $this -> model('user');
    
                    //view
                    $this -> view('login',
                [
                    "a" => $a -> dangky($taikhoan,$password,$name,$email,$diachi,$sdt,$ngaytao),
                ]);   
            }else{
                //view
                $this -> view('/page/text');
            }
        }

        // login
        function dangnhap(){

            if(isset($_POST['btn-dangnhap'])){
                //model
                $a = $this -> model('user');
                $taikhoan = $_POST['taikhoan'];
                $password = $_POST['password'];
                // if($taikhoan == "admin" && $password == "123"){
                //     $_SESSION['user'] = "ADMIN";
                //     $this -> view("admin/admin",
                //     [
                //         "user" => "hello",
                //         "title" => " ",
                //     ]);
                // }
                if(empty($_POST['taikhoan']) || empty($_POST['password'])){
                    $this -> view("login",[
                        "check" => "false",
                    ]
                );
                }else{
                    $result = $a -> dangnhap($taikhoan, $password);
                    if($result == true){
                        // $_SESSION['user'] = strtoupper($taikhoan);
                        $abc = $a -> vaitro($taikhoan,$password);
                        // $_SESSION['vaitro'] = json_decode($abc);
                        $this -> view("login", [
                        "check" => $result,
                        "abc" => $abc,
                    ]);
                    }     
                }         
            }
        }

        // dang xuat
        public function dangxuat(){
            // unset($_SESSION['user']);
            session_destroy();
            // $a = $this -> model('sanpham');
            // $b = $this -> model ('danhmuc');

            //view
            $this -> view("login",
            [
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
    }