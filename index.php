<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 13.04.2016
 * Time: 20:33
 */


require 'FirstClass.php';

$obj = new FirstClass(3,7);
FirstClass::bar(10);
var_dump($obj->getK());