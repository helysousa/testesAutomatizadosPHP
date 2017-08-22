<?php
/**
 * Created by PhpStorm.
 * User: hely
 * Date: 22/08/17
 * Time: 13:58
 */

namespace Hely\Cart\Entities;

use Hely\Cart\Entities\ProductInterface;
use Hely\Cart\Entities\Product;


class Order
{
    protected  $products;
    
    /**
     * Order constructor.
     */
    public function __construct()
    {
        $this->products = new \ArrayObject();
    }

    
    public function addProduct(ProductInterface $product)
    {
        $this->products->append($product);
    }
    
    public function getProducts()
    {
        return $this->products;
    }
    
    public function getTotal()
    {
        $total = 0.0;
        
        foreach ($this->products as $product)
        {
            $total += $product->getPrice();
            
        }
    
        return $total;
    }
}