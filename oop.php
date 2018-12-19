<?php
class Cat {
    var $_color; //properties
    function setColor($_color)
    {
        $this->_color = $_color;
    }
    function clearColor ()
    {
        $this->_color = 'White';
    }
    function showColor ()
    {
        echo 'Cat\'s color is:'.$this->_color.'<br/>';
    }
}

$_cat = new Cat();
$_cat->setColor('Red');
$_cat->showColor(); //Cat's color is: Red
$_cat->clearColor();
$_cat->showColor(); //cat's color is: White