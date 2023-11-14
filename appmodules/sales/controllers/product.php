<?php
import('appmodules.sales.models.product');
import('appmodules.sales.views.product');

#[AllowDynamicProperties]
class ProductController extends Controller { 
    
    public function add() {
        $this->view->add();
    }
    public function edit($id=0) {
        $product = $this->model->getById($id);
        $this->view->edit($product);
    }

    public function list() {
        $sql = "SELECT * FROM product";
        $products = $this->model->query($sql);
        $this->view->list($products);

    }
    public function save() {
        $image = "";    
        $this->model->id = $_POST['id'];
        $this->model->description = $_POST['description'];
        $this->model->price = $_POST['price'];
        $this->model->category = $_POST['category'];
        $this->model->brand = $_POST['brand'];
        if (isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 
                    STATIC_DIR .  "image/$image");
        }
        $this->model->image = $image;
        $this->model->save();
        $this->list();    
    }
    public function delete($id=0) {
        $this->model->delete($id);
        $this->list();
    }
}
?>
