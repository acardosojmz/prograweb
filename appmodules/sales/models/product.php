<?php
    #[AllowDynamicProperties]
    class Product {
        public $product_id;
        public function __construct() {
            $this->product_id = 0;
        }
    }
?>
