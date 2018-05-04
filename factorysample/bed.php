<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:06
 */
require_once 'abstractfurniture.php';
class Bed extends Furniture{
    public function sell() {
        // TODO: Implement sell() method.
        echo "the price of bed is 20";
    }
}