<?php

namespace Gkarman\OtusTestPackage;

class DateCreator
{
    public function getDate(): string
    {
        return date('d-m-Y H-i-s');
    }
}
