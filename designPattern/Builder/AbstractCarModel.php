<?php


namespace DesignPattern\Builder;


abstract class AbstractCarModel
{
    public const SEQUENCE_LIST = [
        'start' => 'start',
        'stop' => 'stop',
        'alarm' => 'alarm',
    ];

    protected array $sequence;

    protected int $isRun = 0;

    protected int $alarm = 0;

    abstract protected function start();

    abstract protected function stop();

    abstract protected function alarm();

    final public function run(): void
    {
        foreach ($this->sequence as $item) {
            if ($item === self::SEQUENCE_LIST['start']) {
                $this->start();
            } elseif ($item === self::SEQUENCE_LIST['alarm']) {
                $this->alarm();
            } elseif ($item === self::SEQUENCE_LIST['stop']) {
                $this->stop();
            }
        }
    }

    /**
     * @param array $sequence
     * @return AbstractCarModel
     */
    final public function setSequence(array $sequence): AbstractCarModel
    {
        $this->sequence = $sequence;
        return $this;
    }
}
