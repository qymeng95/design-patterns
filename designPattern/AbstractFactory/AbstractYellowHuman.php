<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/8/27
 * Time: 11:14
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern\AbstractFactory;

abstract class AbstractYellowHuman implements Human
{
    protected string $color = 'yellow';
    protected string $language = 'zh';

    public function getColor()
    {
        echo $this->color . "\n";
        return $this->color;
    }

    public function talk()
    {
        echo $this->language . "\n";
        return $this->language;
    }
}
