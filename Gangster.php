<?php

class Gangster
{
    public $name;
    private $alive;

    public function __construct($name)
    {
        $this->name = $name;
        $this->alive = true;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAttacked()
    {
        return $this->isAttackedBy;
    }
}
