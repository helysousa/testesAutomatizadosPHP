<?php
/**
 * Created by PhpStorm.
 * User: hely
 * Date: 22/08/17
 * Time: 13:16
 */

namespace Hely\Cart\Entities;

use Hely\Cart\Entities\ProductInterface;
use InvalidArgumentException;

class Product implements ProductInterface
{
    protected $name;
    protected $description;
    protected $price;
    
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        if (is_numeric($price))
        {
            $this->price = $price;
        }
        else
        {
            throw new InvalidArgumentException();
        }
    }
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
}