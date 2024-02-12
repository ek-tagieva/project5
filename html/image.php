<?php
require '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('mur.jpeg');

$img->resize(200, null, function (\Intervention\Image\Constraint $constraint) {
    $constraint->aspectRatio();
});

$img->text('lalalala', $img->getWidth() - 10, $img->getHeight() - 10, function (\Intervention\Image\AbstractFont $font) {
    $font->size(24);
    $font->file('verdana.ttf');
    $font->color([2555, 255, 255, 0.3]);
    $font->align('right');
    $font->valign('bottom');
});

$img->save('test.jpeg');

echo $img->response('jpeg');
