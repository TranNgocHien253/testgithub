<?php

declare(strict_types=1);


require_once 'A.php';
require_once 'B.php';
require_once 'C.php';
require_once 'I.php';

class demo
{
    // public function typeAreturnI(): A
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new I();
    // }
    // public function typeBreturnI(): B
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new I();
    // }
    // public function typeCreturnI(): C
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new I();
    // }
    // public function typeIreturnI(): I
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new I();
    // }
    // public function typeNullreturnI(): null
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new I();
    // }

    public function typeAreturnA(): A
    {
        echo __FUNCTION__ . "</br>";
        return new A();
    }
    // public function typeBreturnA(): B
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new A();
    // }
    public function typeCreturnA(): C
    {
        echo __FUNCTION__ . "</br>";
        return new A();
    }
    public function typeIreturnA(): I
    {
        echo __FUNCTION__ . "</br>";
        return new A();
    }
    // public function typeNullreturnA(): null
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new A();
    // }


    // public function typeAreturnB(): A
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new B();
    // }
    public function typeBreturnB(): B
    {
        echo __FUNCTION__ . "</br>";
        return new B();
    }
    public function typeCreturnB(): C
    {
        echo __FUNCTION__ . "</br>";
        return new B();
    }
    public function typeIreturnB(): I
    {
        echo __FUNCTION__ . "</br>";
        return new B();
    }
    // public function typeNullreturnB(): null
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new B();
    // }


    public function typeAreturnC(): A
    {
        echo __FUNCTION__ . "</br>";
        return new C();
    }

    // public function typeBreturnC(): B
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new C();
    // }
    public function typeCreturnC(): C
    {
        echo __FUNCTION__ . "</br>";
        return new C();
    }
    public function typeIreturnC(): I
    {
        echo __FUNCTION__ . "</br>";
        return new C();
    }
    // public function typeNullreturnC(): null
    // {
    //     echo __FUNCTION__ . "</br>";
    //     return new C();
    // }


    

}

////call(ktraham)

$demo = new demo();
// $demo->typeAreturnI();
// $demo->typeBreturnI();
// $demo->typeCreturnI();
// $demo->typeIreturnI();
// $demo->typeNullreturnI();

$demo->typeAreturnA();
// $demo->typeBreturnA();
$demo->typeCreturnA();
$demo->typeIreturnA();
// $demo->typeNullreturnA();

// $demo->typeAreturnB();
$demo->typeBreturnB();
$demo->typeCreturnB();
$demo->typeIreturnB();
// $demo->typeNullreturnB();

// $demo->typeAreturnC();
// $demo->typeBreturnC();
$demo->typeCreturnC();
$demo->typeIreturnC();
// $demo->typeNullreturnC();



