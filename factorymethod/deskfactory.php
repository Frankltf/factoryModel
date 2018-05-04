<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:23
 */
require_once 'abtractfactory.php';
require_once 'desk.php';
class Deskfactory extends AbstractFactory{
    public function factoryMethod() {
        // TODO: Implement factoryMethod() method.
        $desk=new Desk();
        $desk->getProperties();
    }
}