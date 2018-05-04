<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/5/4
 * Time: 18:15
 */
require_once 'factory.php';
$bed=Factory::createproduct('bed');
$bed->sell();
$chair=Factory::createproduct('chair');
$chair->sell();
$desk=Factory::createproduct('desk');
$desk->sell();