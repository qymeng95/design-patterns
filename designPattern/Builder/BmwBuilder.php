<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/9/5
 * Time: 10:46
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern\Builder;


class BmwBuilder extends AbstractCarBuilder
{
    private BmwModel $bmw;

    public function __construct()
    {
        $this->bmw = new BmwModel();
    }

    public function getCarModel()
    {
        return $this->bmw;
    }

    public function setSequence(array $sequence)
    {
        $this->bmw->setSequence($sequence);
    }
}
