<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2d = new Point2D(2,12);
$point2d->setXY(2,12);
//echo "Toa do 2D la : " . $point2d->getX() . ":" . $point2d->getY() . "<br/>";
echo "Toa Do 2D la :".  $point2d  ."<br/>";

$point3d  = new Point3D(5,10,14);
$point3d->setXYZ(5,10,14);
echo "Toa Do 3D la :" .  $point3d;
?>