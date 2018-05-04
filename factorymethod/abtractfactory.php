<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:23
 */
abstract class AbstractFactory{
    abstract protected function factoryMethod() ;
    public function startFactory(){
        $this->factoryMethod();
    }
}