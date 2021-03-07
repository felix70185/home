<?php

namespace test\shop;

class ShopProduct {
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    
    function __construct(
        $title,
        $firstName,
        $mainName,
        $price,
        $numPages
    ) {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
    }
    
    function getProducer(){
        return $this->producerFirstName ." ".$this->producerMainName;
    }
    
    function getSummaryLine(){
        $base = "{$this->title} ({$this->producerMainName}, ";
        $base .= "{$this->producerFirstName}) ";
        return $base;
    }
}
