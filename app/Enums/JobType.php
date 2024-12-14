<?php

namespace App\Enums;

enum JobType:int {
    case FullTime = 1;
    case PartTime = 2;

    public function name() {
        return match ($this) {
            self::FullTime => trans('common.full time'),
            self::PartTime => trans('common.part time'),
            default => 'unknown'
        };
    }
}