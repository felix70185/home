<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace home\pattern\strategy;

class FixedCostStrategy extends CostStrategy
{
    
    public function chargeType(): string 
    {
        return "Фиксированная оплата";
    }

    public function cost(Lesson $lesson): int {
        return 30;
    }

}