<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 22.10.17
 * Time: 0:01
 */

abstract class Shape
{
    abstract protected function drawOnPage();
    abstract protected function drawInFile();
    abstract protected function drawInConsole();
}