<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/8/27
 * Time: 11:14
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern\Factory;

class BlackHuman implements Human
{
    protected string $color = 'black';
    protected string $language = 'en';

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
