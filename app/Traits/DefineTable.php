<?php

namespace App\Traits;

trait DefineTable
{
    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}

