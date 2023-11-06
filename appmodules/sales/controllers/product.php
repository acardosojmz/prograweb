<?php
import('appmodules.sales.models.product');
import('appmodules.sales.views.product');

#[AllowDynamicProperties]
class ProductController extends Controller { 
    
    public function add() {
        $this->view->add();
    }

    public function list() {
        $sql = "SELECT * FROM product";
        $products = $this->model->query($sql);
        $this->view->list($products);

    }
    public function save() {
        $this->model->id = 0;
        $this->model->description = $_POST['description'];
        $this->model->price = $_POST['price'];
        $this->model->category = $_POST['category'];
        $this->model->brand = $_POST['brand'];
        $this->model->save();
        $this->list();    
    }
}
?>
