<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/8/25
 * Time: 14:15
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern;

use DesignPattern\AbstractFactory\FemaleHumanFactory;
use DesignPattern\AbstractFactory\MaleHumanFactory;
use DesignPattern\Builder\Director;
use DesignPattern\Factory\BlackHuman;
use DesignPattern\Factory\SampleHumanFactory;
use DesignPattern\Factory\StandardHumanFactory;
use DesignPattern\Factory\YellowHuman;
use DesignPattern\Singleton\Singleton;
use DesignPattern\Singleton\SingletonMulti;
use DesignPattern\TemplateMethod\HummerH1Model;
use DesignPattern\TemplateMethod\BmwModel;
use DesignPattern\TemplateMethod\HummerH2Model;
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

    public function testStandardFactory()
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

    public function testSampleFactory()
    {
        $blackHuman = SampleHumanFactory::createHuman(BlackHuman::class);
        $color = $blackHuman->getColor();
        $blackHuman->talk();

        $yellowHuman = SampleHumanFactory::createHuman(YellowHuman::class);
        $color2 = $yellowHuman->getColor();
        $yellowHuman->talk();

        self::assertNotEquals($color, $color2);
    }

    public function testAbstractFactory()
    {
        $maleHumanFactory = new MaleHumanFactory();
        $femaleHumanFactory = new FemaleHumanFactory();

        $maleBlackHuman = $maleHumanFactory->createBlackHuman();
        $feMaleBlackHuman = $femaleHumanFactory->createBlackHuman();
        $maleBlackHuman->getColor();
        $feMaleBlackHuman->getColor();

        $maleBlackHuman->getSex();
        $feMaleBlackHuman->getSex();

        $maleBlackHuman->talk();
        $feMaleBlackHuman->talk();

        $maleYellowHuman = $maleHumanFactory->createYellowHuman();
        $feMaleYellowHuman = $femaleHumanFactory->createYellowHuman();
        $color = $maleYellowHuman->getColor();
        $color2 = $feMaleYellowHuman->getColor();

        $maleYellowHuman->getSex();
        $feMaleYellowHuman->getSex();

        $maleYellowHuman->talk();
        $feMaleYellowHuman->talk();

        self::assertEquals($color, $color2);
    }


    public function testTemplateMethod()
    {
        $hummerH1Model = new HummerH1Model();
        $hummerH2Model = new HummerH2Model();

        $hummerH1Model->run();
        $hummerH2Model->run();

        self::assertEquals(1, 1);
    }

    public function testBuilder()
    {
        $director = new Director();
        $director->getABenzModel()->run();
        $director->getBBenzModel()->run();
        $director->getABmwModel()->run();
        $director->getBBmwModel()->run();

        self::assertEquals(1, 1);
    }
}
