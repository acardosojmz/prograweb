<?php
import('appmodules.sales.models.product');
import('appmodules.sales.views.product');

#[AllowDynamicProperties]
class ProductController extends Controller { 
    
    public function add() {
        $this->view->add();
    }

    public function list() {
        $products = [["id"=>1,"description"=>"Mouse negro Acteck"],
                     ["id"=>2,"description"=>"Laptop Asus negro"],
                     ["id"=>3,"description"=>"Celular Huawei Pro40"],
                     ["id"=>4,"description"=>"Calculadora Casio model mx-5050"],
                     ["id"=>5,"description"=>"Cañon Epson Blanco"]
                    ];
        $this->view->list($products);

    }
}
?>
