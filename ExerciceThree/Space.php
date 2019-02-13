<?php

namespace Practice\ExerciceThree;

class Space
{

    private $vehicles;

    private function validateAdd(Vehicle $vehicle)
    {
        $maximumSize = 1;
        $vehicleSize = $vehicle->getModelSize();
        $totalUsed = $this->getTotalUsedSize();
        if (($totalUsed + $vehicleSize) > $maximumSize) {
            throw new MaxSpaceSizeException();
        }
        return true;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->validateAdd($vehicle);
        $this->vehicles[] = $vehicle;
    }

    public function getTotalUsedSize()
    {
        $usedSize = 0;
        if (!empty($this->vehicles)) {
            foreach ($this->vehicles as $vehicle) {
                $usedSize += $vehicle->getModelSize();
            }
        }
        return $usedSize;
    }

    public function getNumberOfVehicles(): int
    {
        return count($this->vehicles);
    }

}
