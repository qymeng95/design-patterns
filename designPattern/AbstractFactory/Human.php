<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/8/27
 * Time: 11:14
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern\AbstractFactory;

interface Human
{
    //每个人种的皮肤都有相应的颜色
    public function getColor();

    //人类会说话
    public function talk();

    //性别
    public function getSex();
}
