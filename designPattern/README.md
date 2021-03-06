# design-patterns

### 1单一职责原则
- 单一职责原则的英文名称是Single Responsibility Principle，简称是SRP
- 对于接口，我们在设计的时候一定要做到单一，但是对于实现类就需要多方面考虑了。生搬硬套单一职责原则会引起类的剧增，给维护带来非常多的麻烦，而且过分细分类的职责也会人为地增加系统的复杂性
- 对于单一职责原则，我的建议是接口一定要做到单一职责，类的设计尽量做到只有一个原因引起变化。

### 2里氏替换原则
- 如果对每一个类型为S的对象o1，都有类型为T的对象o2，使得以T定义的所有程序P在所有的对象o1都代换成o2时，程序P的行为没有发生变化，那么类型S是类型T的子类型。
- 所有引用基类的地方必须能透明地使用其子类的对象
- 只要父类能出现的地方子类就可以出现，而且替换为子类也不会产生任何错误或异常，使用者可能根本就不需要知道是父类还是子类。但是，反过来就不行了，有子类出现的地方，父类未必就能适应。
  - 子类必须完全实现父类的方法
  - 子类可以有自己的个性
  - 覆盖或实现父类的方法时输入参数可以被放大
  - 覆写或实现父类的方法时输出结果可以被缩小
- 在项目中，采用里氏替换原则时，尽量避免子类的“个性”，一旦子类有“个性”，这个子类和父类之间的关系就很难调和了，把子类当做父类使用，子类的“个性”被抹杀——委屈了点；把子类单独作为一个业务来使用，则会让代码间的耦合关系变得扑朔迷离——缺乏类替换的标准。

### 3依赖倒置原则
- 高层模块不应该依赖低层模块，两者都应该依赖其抽象；
- 抽象不应该依赖细节
- 细节应该依赖抽象

- 模块间的依赖通过抽象发生，实现类之间不发生直接的依赖关系，其依赖关系是通过接口或抽象类产生的；
- 接口或抽象类不依赖于实现类
- 实现类依赖接口或抽象类
- 更加精简的定义就是“面向接口编程


- 构造函数传递依赖对象
- Setter方法传递依赖对象
- 接口声明依赖对象

-  接口负责定义public属性和方法，并且声明与其他对象的依赖关系，抽象类负责公共构造部分的实现，实现类准确的实现业务逻辑，同时在适当的时候对父类进行细化。


### 4接口隔离原则
- 类间的依赖关系应该建立在最小的接口上。

- 接口要尽量小
- 根据接口隔离原则拆分接口时，首先必须满足单一职责原则

- 一个接口只服务于一个子模块或业务逻辑；
- 通过业务逻辑压缩接口中的public方法，接口时常去回顾，尽量让接口达到“满身筋骨肉”，而不是“肥嘟嘟”的一大堆方法；
- 已经被污染了的接口，尽量去修改，若变更的风险较大，则采用适配器模式进行转化处理

### 5迪米特法则
- 迪米特法则（Law of Demeter，LoD）也称为最少知识原则（Least Knowledge Principle，LKP）
- 一个对象应该对其他对象有最少的了解

- 迪米特法则的核心观念就是类间解耦，弱耦合，只有弱耦合了以后，类的复用率才可以提高。其要求的结果就是产生了大量的中转或跳转类，导致系统的复杂性提高，同时也为维护带来了难度。读者在采用迪米特法则时需要反复权衡，既做到让结构清晰，又做到高内聚低耦合

### 6开闭原则
- 一个软件实体如类、模块和函数应该对扩展开放，对修改关闭s

- 软件实体应该对扩展开放，对修改关闭，其含义是说一个软件实体应该通过扩展来实现变化，而不是通过修改已有的代码来实现变化
