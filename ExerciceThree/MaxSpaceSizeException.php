<?php

namespace Practice\ExerciceThree;

class MaxSpaceSizeException extends \Exception
{

    public function __construct()
    {
        parent::__construct('Não pôde adicionar veículo pois a vaga ultrapassou o seu limíte máximo.');
    }

}
