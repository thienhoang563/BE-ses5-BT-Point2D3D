<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 26/01/2019
 * Time: 18:31
 */
include_once "Point2D.php";
class Point3D extends Point2D
{public $z;

public function __construct($x, $y, $z)
{
    parent::__construct($x, $y);
    $this->z = $z;
}

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function getXYZ(){
        $array[] = $this->x;
        $array[] = $this->y;
        $array[] = $this->z;
        return json_encode($array);
    }
    public function setXYZ($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function __toString()
    {
        return $this->getXYZ();
    }

}