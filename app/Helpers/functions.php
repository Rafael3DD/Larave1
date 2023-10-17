<?php

use App\Enums\SupportStatus;
use App\Models\Support;

if(!function_exists('getStatusSupport')){
    function getStatusSupport(string $status):string{
        return SupportStatus::fromValue($status);
    }
}

