<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/8/27
 * Time: 11:14
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern\AbstractFactory;

class MaleBlackHuman extends AbstractBlackHuman
{
    protected string $sex = 'male';

    public function getSex()
    {
        echo $this->sex . "\n";
        return $this->sex;
    }
}
