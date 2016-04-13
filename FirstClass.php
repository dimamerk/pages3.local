<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 13.04.2016
 * Time: 21:13
 */



class FirstClass {

    public $a;
    public $b;

    public static $k;

    /**
     * FirstClass constructor.
     * @param int $a
     * @param int $b
     */
    public function __construct($a = 0,$b = 1) {
        $this->a = $a;
        $this->b = $b;
    }

    public function start(){
        $this->a = 5;
        $this->b = 10;
    }

    /**
     * @param int $k
     */
    public static function bar($k = 5) {
        self::$k = $k;
    }

    /**
     * @return mixed
     */
    public function getK() {
        return self::$k;
    }

}