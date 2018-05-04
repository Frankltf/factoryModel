<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:07
 */
require_once 'abstractfurniture.php';
class Desk extends Furniture{
    public function sell() {
        // TODO: Implement sell() method.
        echo "the price of desk is 30";
    }
}