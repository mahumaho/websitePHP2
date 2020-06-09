<?php
/**
 * Class Product
 * Author: Lei Song
 * Date: 2020-06-09
 * Version: 1
 */

class Product
{
    public $id;
    public $name;
    public $image;
    public $price;
    public $categoryid;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $description
     * @param $categoryID
     */
    public function __construct($id, $name, $image, $price, $categoryid)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->categoryid = $categoryid;
    }


}
