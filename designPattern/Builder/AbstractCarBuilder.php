<?php


namespace DesignPattern\Builder;


abstract class AbstractCarBuilder
{
    abstract public function setSequence(array $sequence);

    abstract public function getCarModel();
}
