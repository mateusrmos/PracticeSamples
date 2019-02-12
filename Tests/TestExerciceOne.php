<?php

use PHPUnit\Framework\TestCase;

class TestExerciceOne extends TestCase
{

    public function testResultSecondDegreeEquation()
    {
        $objExercice = new \Practice\ExerciceOne\Exercice();
        $resultEquation = $objExercice->executeSecondDegreeEquation(2, 1);
        $expectedResultEquation = 3;
        $this->assertEquals($expectedResultEquation, $resultEquation);
    }

}
