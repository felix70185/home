<?php
namespace home\pattern\strategy;

abstract class Lesson {
    private $duration;
    private $costStrategy;
    
    public function __construct(int $duration, CostStrategy $costStrategy) {
        $this->duration = $duration;
        $this->costStrategy = $costStrategy;
    }
    
    public function cost() : int
    {
        return $this->costStrategy->cost($this);
    }
    public function chargeType() : int
    {
        return $this->costStrategy->chargeType();
    }
    
    public function getDuration() : int
    {
        return $this->duration;
    }
}
