<?php
namespace App\Repository;

use App\Condition;

class ConditionRepository
{

    public function getCondition()
    {
        $condition = Condition::find(1);
        return $condition;
    }


}