<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:37
 */
require_once 'bedfactory.php';
require_once 'chairfactory.php';
require_once 'deskfactory.php';

$bed=new Bedfactory();
$bed->startFactory();

$chair=new Chairfactory();
$chair->startFactory();

$desk=new Deskfactory();
$desk->startFactory();