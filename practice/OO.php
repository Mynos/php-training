<?php

class Circle {
    
    public function draw ($width, $height){
        
        $canvas = imagecreatetruecolor($width, $height);
        
        $color = imagecolorallocate($canvas, 135, 132, 28);
        
        imagerectangle($canvas, 50 , 50, 100, 100, $color);
        
        imagepng($canvas);
        
        imagedestroy($canvas);
        
        
       
    }
    
}


class Canvas {
    
    public function draw ($width, $height){

        $canvas2 = imagecreatetruecolor($width, $height);

        $color2 = imagecolorallocate($canvas, 135, 132, 28);

        imagerectangle($canvas, 50 , 50, 100, 100, $color);

        imagepng($canvas2);

        imagedestroy($canvas2);
    }
    
}

header('Content-type: image/png');
$circle = new Circle();

$circle->draw(200, 200);
$canvas = new Canvas();
$canvas->draw(1000, 1000);

?>