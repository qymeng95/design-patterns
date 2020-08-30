<?php


namespace DesignPattern\TemplateMethod;


abstract class AbstractHummerModel
{
    protected int $isRun = 0;

    protected int $alarm = 0;

    abstract protected function start();

    abstract protected function stop();

    abstract protected function alarm();

    final public function run()
    {
        $this->start();

        if ($this->needAlarm()) {
            $this->alarm();
        }

        $this->stop();
    }

    protected function needAlarm()
    {
        echo 'need alarm' . "\n";
        return true;
    }
}