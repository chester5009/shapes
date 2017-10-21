<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 21.10.17
 * Time: 18:00
 */
require_once 'ShapeController.php';

class Controller
{
    public function __construct()
    {
        $url = $_SERVER["REQUEST_URI"];
        //$this->log(explode('/',$url));
        $shapeUrl = explode('/',$url)[1];
        $drawUrl = explode('/',$url)[2];

        $scontroller = new ShapeController();
        $scontroller->drawShape($shapeUrl,$drawUrl);

    }

    public function log($str)
    {
        error_log($str);
    }
}