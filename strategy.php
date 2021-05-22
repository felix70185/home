<?php
namespace home\pattern\strategy;

ini_set("display_errors", true);

echo 'Pattern Strategy';

class Lecture extends Lesson{

}

class Siminar extends Lesson{
    
}

$lessons[] = new Siminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());
foreach ($lessons as $lesson) {
    print "Оплата за занятие {$lesson->cost()}";
    print "Тип оплаты: {$lesson->chargeType()}\п";
}