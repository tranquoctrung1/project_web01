<?php 

    // Sản Phẩm
    class Product {
        var $id;
        var $num;
    }

    // Giỏ Hàng
    class ShoppingCart {
        var $listProduct;

        public function __construct()
        {
            $this->listProduct = array();
        }
        public function update($id, $newNum)
        {
            for($i = 0; $i < count($this->listProduct); $i++)
            {
                if($this->listProduct[$i]->id == $id)
                {
                    $this->listProduct[$i]->num = $newNum;
                }
            }
        }
        public function delete($id)
        {
            for($i = 0; $i < count($this->listProduct); $i++)
            {
                if($this->listProduct[$i]->id == $id)
                {
                    array_splice($this->listProduct, $i, 1);
                }
            }
        }
        public function add($id, $num = 1 )
        {
            if(count($this->listProduct) == 0)
            {
                $p = new Product();
                $p->id = $id;
                $p->num = $num;
                $this->listProduct[] = $p;
            }
            else 
            {
                for($i = 0; $i < count($this->listProduct); $i++)
                {
                    if($this->listProduct[$i]->id == $id)
                    {
                        break;
                    }
                }
                if($i == count($this->listProduct))
                {
                    $p = new Product();
                    $p->id = $id;
                    $p->num = $num;
                    $this->listProduct[] = $p;
                }
                else 
                {
                    $this->listProduct[$i]->num+= $num;
                }
            }
        }
    }
?> 

