<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:23
 */
require_once 'abtractfactory.php';
require_once 'chair.php';
class Chairfactory extends AbstractFactory{
    public function factoryMethod() {
        // TODO: Implement factoryMethod() method.
        $chair=new Chair();
        $chair->getProperties();
    }
}