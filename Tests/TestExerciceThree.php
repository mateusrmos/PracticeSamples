<?php

use \PHPUnit\Framework\TestCase;

class TestExerciceThree extends TestCase
{

    public function testCommonUse()
    {
        $parkingObj = new \Practice\ExerciceThree\Parking();
        $firstSpaceObj = new \Practice\ExerciceThree\Space();
        $secondSpaceObj = new \Practice\ExerciceThree\Space();
        $thirdSpaceObj = new \Practice\ExerciceThree\Space();
        $parkingObj->addSpace($firstSpaceObj);
        $parkingObj->addSpace($secondSpaceObj);
        $parkingObj->addSpace($thirdSpaceObj);
        $firstCarObj = new \Practice\ExerciceThree\Car('Carro qualquer', 'ABC-123');
        $firstSpaceObj->addVehicle($firstCarObj);
        $secondCarObj = new \Practice\ExerciceThree\Car('Outro Carro', 'ABC-321');
        $secondSpaceObj->addVehicle($secondCarObj);
        $firstMotorcycleObj = new \Practice\ExerciceThree\Motorcycle('Moto qualquer', 'CBA-123');
        $secondMotorcycleObj = new \Practice\ExerciceThree\Motorcycle('Outra moto', 'CBA-321');
        $thirdSpaceObj->addVehicle($firstMotorcycleObj);
        $thirdSpaceObj->addVehicle($secondMotorcycleObj);
        $expectedNumberOfVehicles = 4;
        $this->assertEquals($parkingObj->getTotalVehicles(), $expectedNumberOfVehicles);
    }

    public function testMaxSpaceError()
    {
        $parkingObj = new \Practice\ExerciceThree\Parking();
        $firstSpaceObj = new \Practice\ExerciceThree\Space();
        $parkingObj->addSpace($firstSpaceObj);
        $sampleCarObj = new \Practice\ExerciceThree\Car('Carro qualquer', 'ABC-123');
        $sampleMotorcycleObj = new \Practice\ExerciceThree\Motorcycle('Moto qualquer', 'CBA-123');
        $this->expectException(\Practice\ExerciceThree\MaxSpaceSizeException::class);
        $firstSpaceObj->addVehicle($sampleCarObj);
        $firstSpaceObj->addVehicle($sampleMotorcycleObj);
    }

}
