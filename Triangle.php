<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 22.10.17
 * Time: 0:14
 */
require_once 'Shape.php';

class Triangle extends Shape
{

    public function drawOnPage()
    {
        $canvas = imagecreatetruecolor(400, 400);

        $green = imagecolorallocate($canvas, 132, 135, 28);
        imageline($canvas, 0, 0, 0, 400, $green);
        imageline($canvas, 0, 400, 400, 400, $green);
        imageline($canvas, 400, 400, 0, 0, $green);

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
        echo '<h2>draw Triangle</h2>';
        error_log('draw Triangle');
        // TODO: Implement drawInConsole() method.
    }
}