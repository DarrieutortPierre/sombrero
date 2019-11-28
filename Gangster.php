<?php

class Gangster
{
    private $name;
    private $alive;

    public function __construct($name)
    {
        $this->name = $name;
        $this->alive = true;
    }

    public function isAttackedBy(gun $gun)
    {
        $this->alive = false;
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
