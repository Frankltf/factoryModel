<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:23
 */
require_once 'abtractfactory.php';
require_once 'bed.php';
class Bedfactory extends AbstractFactory{
    public function factoryMethod() {
        $bed=new Bed();
        $bed->getProperties();
    }
}