<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/9/5
 * Time: 10:46
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern\Builder;


class BenzBuilder extends AbstractCarBuilder
{

    private BenzModel $benz;

    public function __construct()
    {
        $this->benz = new BenzModel();
    }

    public function getCarModel()
    {
        return $this->benz;
    }

    public function setSequence(array $sequence)
    {
        $this->benz->setSequence($sequence);
    }
}
