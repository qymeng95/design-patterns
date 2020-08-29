<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/8/27
 * Time: 11:45
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern\AbstractFactory;

class MaleHumanFactory extends AbstractHumanFactory
{
    /**
     * @return Human
     */
    public function createBlackHuman()
    {
        return new MaleBlackHuman();
    }

    /**
     * @return Human
     */
    public function createYellowHuman()
    {
        return new MaleYellowHuman();
    }
}
