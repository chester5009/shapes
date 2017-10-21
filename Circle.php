<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 22.10.17
 * Time: 0:17
 */

require_once 'Shape.php';

class Circle extends Shape
{

    public function drawOnPage()
    {
        $canvas = imagecreatetruecolor(400, 400);

        $green = imagecolorallocate($canvas, 132, 135, 28);

        imagearc($canvas, 200, 200, 150, 150, 0, 360, $green);
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
        echo '<h2>draw Circle</h2>';
        error_log('draw Circle');
        // TODO: Implement drawInConsole() method.
    }
}