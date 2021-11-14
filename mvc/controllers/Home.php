<?php

class Home extends Controller{

    function SayHi() {
        $allProduct = $this->productModel->getAllProduct();
        $this->view("home",[
            "render"=>"home",
            "countProduct"=>count($allProduct),
            "allCategory"=>$this->allCategory,
            "allProduct"=>$allProduct
        ]);   
    }

  
?>
