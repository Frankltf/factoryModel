<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:31
 */
require_once 'interfactFurniture.php';
class Chair implements InterfaceFurniture{
    public function getProperties() {
        // TODO: Implement getProperties() method.
        echo 'chair is here \n';
    }
}