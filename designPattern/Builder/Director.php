<?php
/**
 * Created by IntelliJ IDEA.
 * User: qymeng
 * Date: 2020/9/5
 * Time: 10:44
 * Mail: qymeng@i9i8.com
 */

namespace DesignPattern\Builder;

class Director
{
    private array $sequence;

    private BenzBuilder $benzBuilder;
    private BmwBuilder $bmwBuilder;

    public function __construct()
    {
        $this->benzBuilder = new BenzBuilder();
        $this->bmwBuilder = new BmwBuilder();
    }

    public function getABenzModel()
    {
        $this->sequence = [
            AbstractCarModel::SEQUENCE_LIST['start'],
            AbstractCarModel::SEQUENCE_LIST['alarm'],
            AbstractCarModel::SEQUENCE_LIST['stop']
        ];

        $this->benzBuilder->setSequence($this->sequence);

        return $this->benzBuilder->getCarModel();
    }

    public function getBBenzModel()
    {
        $this->sequence = [
            AbstractCarModel::SEQUENCE_LIST['start'],
            AbstractCarModel::SEQUENCE_LIST['alarm'],
            AbstractCarModel::SEQUENCE_LIST['stop'],
            AbstractCarModel::SEQUENCE_LIST['alarm'],
            AbstractCarModel::SEQUENCE_LIST['start'],
        ];

        $this->benzBuilder->setSequence($this->sequence);

        return $this->benzBuilder->getCarModel();
    }

    public function getABmwModel()
    {
        $this->sequence = [
            AbstractCarModel::SEQUENCE_LIST['start'],
            AbstractCarModel::SEQUENCE_LIST['alarm'],
            AbstractCarModel::SEQUENCE_LIST['stop']
        ];

        $this->bmwBuilder->setSequence($this->sequence);

        return $this->bmwBuilder->getCarModel();
    }

    public function getBBmwModel()
    {
        $this->sequence = [
            AbstractCarModel::SEQUENCE_LIST['start'],
            AbstractCarModel::SEQUENCE_LIST['alarm'],
            AbstractCarModel::SEQUENCE_LIST['stop'],
            AbstractCarModel::SEQUENCE_LIST['alarm'],
        ];

        $this->bmwBuilder->setSequence($this->sequence);

        return $this->bmwBuilder->getCarModel();
    }
}
