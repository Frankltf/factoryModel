<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:31
 */
require_once 'interfactFurniture.php';
class Bed implements InterfaceFurniture{
    public function getProperties() {
        // TODO: Implement getProperties() method.
        echo 'bed is here \n';
    }
}