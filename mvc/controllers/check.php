<?php

    class check extends controller{
        public function sayhi(){
            //model

            $a = $this -> model('abc');

            //views

            $this -> view('checkT',[
                "arr" => $a -> DL(),
            ]);
        }
    }

?>