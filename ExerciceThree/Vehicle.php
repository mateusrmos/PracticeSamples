<?php

namespace Practice\ExerciceThree;

abstract class Vehicle
{

    private $modelName, $modelSize, $sign;

    public function __construct(string $modelName, string $sign)
    {
        $this->setModelName($modelName);
        $this->setSign($sign);
        $this->initialize();
    }

    public abstract function initialize();

    private function setModelName(string $modelName)
    {
        $this->modelName = $modelName;
    }

    public function setModelSize(float $modelSize)
    {
        $this->modelSize = $modelSize;
    }

    private function setSign(string $sign)
    {
        $this->sign = $sign;
    }

    public function getModelName(): string
    {
        return $this->modelName;
    }

    public function getModelSize(): float
    {
        return $this->modelSize;
    }

    public function getSign(): string
    {
        return $this->sign;
    }

}
