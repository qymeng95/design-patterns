<?php

/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/8/25
 * Time: 14:00
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern;

/**
 * Class Singleton
 * @package Tests\DesignPatterns
 */
class Singleton
{
    private static ?Singleton $singleton = null;

    protected static $id;

    final private function __construct()
    {
        self::$id = random_int(0, 100);
    }

    public static function getSingleton(): ?Singleton
    {
        if (null === self::$singleton) {
            self::$singleton = new static();
        }

        return self::$singleton;
    }

    public static function say()
    {
        $res = "singleton " . self::$id;

        echo $res . "\n";

        return $res;
    }
}

/**
 * 由于单例模式在内存中只有一个实例，减少了内存开支，特别是一个对象需要频繁地创建、销毁时，而且创建或销毁时性能又无法优化，单例模式的优势就非常明显。
 * 由于单例模式只生成一个实例，所以减少了系统的性能开销，当一个对象的产生需要比较多的资源时，如读取配置、产生其他依赖对象时，则可以通过在应用启动时直接产生一个单例对象，然后用永久驻留内存的方式来解决
 * 单例模式可以避免对资源的多重占用
 * 单例模式可以在系统设置全局的访问点，优化和共享资源访问
 */

/**
 * 单例模式一般没有接口，扩展很困难，若要扩展，除了修改代码基本上没有第二种途径可以实现
 * 因为接口对单例模式是没有任何意义的，它要求“自行实例化”，并且提供单一实例、接口或抽象类是不可能被实例化的。当然，在特殊情况下，单例模式可以实现接口,被继承等，需要在系统开发中根据环境判断
 * 单例模式与单一职责原则有冲突。一个类应该只实现一个逻辑，而不关心它是否是单例的，是不是要单例取决于环境，单例模式把“要单例”和业务逻辑融合在一个类中。
 */

/**
 * 单例模式的使用场景
 * 在一个系统中，要求一个类有且仅有一个对象，如果出现多个对象就会出现“不良反应”，可以采用单例模式，具体的场景如下：
 * ● 要求生成唯一序列号的环境；
 * ● 在整个项目中需要一个共享访问点或共享数据，例如一个Web页面上的计数器，可以不用把每次刷新都记录到数据库中，使用单例模式保持计数器的值，并确保是线程安全的；
 * ● 创建一个对象需要消耗的资源过多，如要访问IO和数据库等资源；
 * ● 需要定义大量的静态常量和静态方法（如工具类）的环境，可以采用单例模式（当然，也可以直接声明为static的方式）。
 */

/**
 * 需要产生固定数量对象的模式就叫做有上限的多例模式，它是单例模式的一种扩展，采用有上限的多例模式，我们可以在设计时决定在内存中有多少个实例，方便系统进行扩展，修正单例可能存在的性能问题，提供系统的响应速度
 */

