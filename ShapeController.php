<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 22.10.17
 * Time: 0:27
 */
require_once 'Triangle.php';
require_once 'Rectangle.php';
require_once 'Circle.php';

class ShapeController
{
    public function __construct()
    {

    }

    public function drawShape($shapeUrl , $drawType){
        $shape = null;
        switch ($shapeUrl){
            case 'rectangle':
                $shape = new Rectangle();
                break;
            case 'circle':
                $shape = new Circle();
                break;
            case 'triangle':
                $shape = new Triangle();
                break;

        }

        switch ($drawType){
            case 'console':
                $shape->drawInConsole();
                break;
            case 'page':
                $shape->drawOnPage();
                break;
            case 'file':
                $shape->drawInFile();
                break;
        }
    }
}