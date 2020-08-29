<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/8/25
 * Time: 14:15
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern;

use DesignPattern\Factory\BlackHuman;
use DesignPattern\Factory\HumanFactory;
use DesignPattern\Factory\StandardHumanFactory;
use DesignPattern\Factory\YellowHuman;
use DesignPattern\Singleton\Singleton;
use DesignPattern\Singleton\SingletonMulti;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testSingleton()
    {
        $singleton = Singleton::getSingleton();
        $res1 = $singleton::say();

        $singleton2 = Singleton::getSingleton();
        $res2 = $singleton2::say();

        self::assertEquals($res1, $res2);
    }

    public function testSingletonMulti()
    {
        $singleton = SingletonMulti::getSingleton(1);
        $res1 = $singleton->say();

        $singleton2 = SingletonMulti::getSingleton(2);
        $res2 = $singleton2->say();

        self::assertNotEquals($res1, $res2);
    }

    public function testFactory()
    {
        $standardHumanFactory = new StandardHumanFactory();
        $blackHuman = $standardHumanFactory->createHuman(BlackHuman::class);
        $color = $blackHuman->getColor();
        $blackHuman->talk();

        $yellowHuman = $standardHumanFactory->createHuman(YellowHuman::class);
        $color2 = $yellowHuman->getColor();
        $yellowHuman->talk();

        self::assertNotEquals($color, $color2);
    }
}
