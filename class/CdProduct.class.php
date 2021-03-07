<?php

namespace test\shop;

class CdProduct extends ShopProduct
{
    private $playLength;
    
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    
    function __construct(
        $title,
        $firstName,
        $mainName,
        $price,
        $playLength
    ) {
        parent::__construct($title, $firstName, $mainName, $price);
        
        $this->playLength = $playLength;
    }
    
    function getPlayLength(){
        $base = "{$this->title} ( {$this->producerMainName},";
        $base .= "{$this->producerFirstName} );";
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
    
    function getSummaryLine(){
        $base = "{$this->title} ({$this->producerMainName}, ";
        $base .= "{$this->producerFirstName}) ";
        return $base;
    }
}
