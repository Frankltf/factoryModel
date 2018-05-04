<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:12
 */
require_once 'bed.php';
require_once 'chair.php';
require_once 'desk.php';
class Factory{
    public static function createproduct($operate){
        switch ($operate){
            case 'bed':
                return new Bed();
            break;
            case 'desk':
                return new Desk();
            break;
            case 'chair':
                return new Chair();
            break;
            default:
                new ErrorException();
        }
    }
}