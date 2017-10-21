<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 22.10.17
 * Time: 0:05
 */
require_once 'Shape.php';

class Rectangle extends Shape
{

    public function drawOnPage()
    {
        $canvas = imagecreatetruecolor(400, 400);

        $green = imagecolorallocate($canvas, 132, 135, 28);

        imagerectangle($canvas, 50, 50, 350, 350, $green);

        header('Content-Type: image/jpeg');

        imagejpeg($canvas);
        imagedestroy($canvas);
        // TODO: Implement drawOnPage() method.
    }

    public function drawInFile()
    {
        // TODO: Implement drawInFile() method.
    }

    public function drawInConsole()
    {
        echo '<h2>draw Rectangle</h2>';
        error_log('draw Rectangle');
        // TODO: Implement drawInConsole() method.
    }
}