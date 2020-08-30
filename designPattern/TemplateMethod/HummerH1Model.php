<?php


namespace DesignPattern\TemplateMethod;


class HummerH1Model extends AbstractHummerModel
{
    protected string $name = 'H1';

    protected function start()
    {
        $this->isRun = 1;
        $str = $this->name . ' start ' . $this->isRun;

        echo $str . "\n";

        return $str;
    }

    protected function stop()
    {
        $this->isRun = 0;
        $str = $this->name . ' stop ' . $this->isRun;

        echo $str . "\n";

        return $str;
    }

    protected function alarm()
    {
        $this->alarm = 1;
        $str = $this->name . ' alarm ' . $this->isRun;

        echo $str . "\n";

        return $str;
    }

    protected function needAlarm()
    {
        echo 'need alarm' . "\n";
        return true;
    }
}