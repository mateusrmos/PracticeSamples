<?php

namespace Practice\ExerciceThree;

class Parking
{

    private $spaces;

    public function addSpace(Space $space)
    {
        $this->spaces[] = $space;
    }

    public function getTotalVehicles(): int
    {
        $total = 0;
        if (!empty($this->spaces)) {
            foreach ($this->spaces as $eachSpace) {
                $total += $eachSpace->getNumberOfVehicles();
            }
        }
        return $total;
    }

}
