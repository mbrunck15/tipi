<?php
spl_autoload_register(function ($className){
include 'class/' . $className . '.php';
});

$a=new Zaehler();
$b=new Zaehler1();
$a->fuegeZuschauerhinzu(5);
$b->fuegeZuschauerhinzu(10);



$c=new Gesamtzaehler();

echo $c->getpersonen();
