<?php
namespace home\pattern\strategy;
ini_set("display_errors", true);

require_once 'class/pattern/strategy/CostStrategy.class.php';
require_once 'class/pattern/strategy/FixedCostStrategy.class.php';
require_once 'class/pattern/strategy/TimedCostStrategy.class.php';
require_once 'class/pattern/strategy/Lesson.class.php';


echo '<h3>Pattern Strategy</h3>';

class Lecture extends Lesson{

}

class Siminar extends Lesson{
    
}

$lessons[] = new Siminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());
foreach ($lessons as $lesson) {
    print "Тип оплаты: {$lesson->chargeType()}<br>";
    print "Оплата за занятие {$lesson->cost()}<br>";
}