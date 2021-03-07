<?php

namespace test\shop;

class BookProduct extends ShopProduct
{
    private $numPages;
    
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
        parent::__construct($title,$firstName,$mainName,$price);
        
        $this->numPages = $numPages;
    }
    
    function getNumberOfPages(){
        return $this->numPages;
    }
    
    function getSummaryLine(){
        $base = parent::getSummaryLine();
        $base .= ": {$this->numPages} стр.";
        
        return $base;
    }
}
