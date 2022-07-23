<?php

class cart extends controller
{
    public function sayhi()
    {
        //model
        //view
        $this->view(
            "cart",
            [
                "viewpart" => "cartshow",
            ]
        );
    }
}
