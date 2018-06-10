<?php

// On recupere input et filtre
if (isset($_GET['iteration']))
{
    $_GET['iteration'] = htmlspecialchars($_GET['iteration']);
    $_GET['iteration'] = str_replace(' ', '', $_GET['iteration']);
    $_GET['iteration'] = str_replace(',', '.', $_GET['iteration']);
}
if (isset($_GET['degre']))
{
    $_GET['degre'] = htmlspecialchars($_GET['degre']);
    $_GET['degre'] = str_replace(' ', '', $_GET['degre']);
    $_GET['degre'] = str_replace(',', '.', $_GET['degre']);
}


if (!isset($_GET['iteration']) || $_GET['iteration'] == '' || !is_numeric($_GET['iteration']))
    $iterations_max = 50;
else
    $iterations_max = (int)$_GET['iteration'];

if (!isset($_GET['degre']) || $_GET['degre'] == '' || !is_numeric($_GET['degre']))
    $degree = 2;
else
    $degree = (int)$_GET['degre'];

// Variables
$x1 = -2.4;
$x2 = 2.4;
$y1 = -2.4;
$y2 = 2.4;
$zoom = 100;
$size_x = ($x2 - $x1) * $zoom;
$size_y = ($y2 - $y1) * $zoom;
$x = 0;
$y = 0;
$z = 0;

// Creation de l'image et des couleurs
$image = imagecreatetruecolor($size_x, $size_y);
$blanc = imagecolorallocate($image, 255, 255, 255);
$black  = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0 ,0 , $blanc);
$debut = microtime(true);

// On parcours l'image
$x = 0;
while ($x < $size_x)
{
    while ($y < $size_y)
    {
        $rc = $x1 + ($x2 - $x1) / $size_x * $x;
        $ic = $y1 + ($y2 - $y1) / $size_y * $y;
        $rz = 0;
        $iz = 0;
        $i = 0;
        $break = false;

        while ($z < $iterations_max)
        {
            $r = $rz;
            $i = $iz;
            $rz = pow($r * $r + $i * $i, ($degree/2)) * cos($degree * atan2($i, $r)) + $rc;
            $iz = pow($r * $r + $i * $i, ($degree/2)) * sin($degree * atan2($i, $r)) + $ic;
            if ($rz * $rz + $iz * $iz >= 4)
                break;
            $z++;
        }

        if ($z == $iterations_max)
            imagesetpixel($image, $x, $y, $blanc);
        else
        {
            $degrade = imagecolorallocate($image, $z * 255 / $iterations_max ,$z * 255 / $iterations_max , $z * 255 / $iterations_max);
            imagesetpixel($image, $x, $y, $degrade);
        }

        $y++;
        $z = 0;
    }
    $x++;
    $y = 0;
}

$temps = round(microtime(true) - $debut, 3);
imagestring($image, 3, 1, 1, "Temps : " . $temps . " secondes", $blanc);
header('Content-type: image/png');
imagepng($image);
?>
