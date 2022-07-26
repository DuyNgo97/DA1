<?php

    class account extends controller{
        public function sayhi(){
            //model
            //view
            $this -> view("account",
            [
                "viewpart" => "colright"
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }
    

        public function changepass(){
            //model
            $model = $this -> model('user');
            //view
            $this -> view("account",
            [
                "viewpart" => "changepass",
                "arrUs" => $model ->selectAllUser(),
                // "arrNV" => $a -> sanphambanchay(),
                // "arrDM" => $b -> getDM(),
                // "sanpham" => $a -> selectSP(),
            ]
            );
        }

        
        public function edituser($id){
            $i = $id;
            $model = $this -> model('user');
            $this -> view("account",[
                "viewpart" => "changepass",
                "id" => $i,
                "arrEd" =>$model ->Edit($id),
            
            ]);
        }

        public function Update(){
            if(isset($_POST['submit'])){
                $id = $_POST['us_id'];
                 $password=$_POST['psw'];
                 $model = $this -> model('user');
                 $this -> view("account",[
                     "viewpart" => "changepass",
                     "id" => $id,
                     "check" =>$model ->Update($id,$password),
                     "arrEd" =>$model ->Edit($id),
                    ]); 
            }
        }
    }

?>