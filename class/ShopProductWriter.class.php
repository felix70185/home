<?php

namespace test\shop;

abstract class ShopProductWriter
{
    protected $product = [];

    public function addProduct(ShopProduct $shopProduct){
        $product[] = $shopProduct;
    }

    abstract public function writer();
}