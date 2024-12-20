<?php

namespace App\Enums;

enum BLogStatus:int {
    case Published = 1;
    case Draft = 2;

    public function name() {
        return match ($this) {
            self::Published => __('Published'),
            self::Draft => __('Draft'),
        };
    }
    public function color() {
        return match ($this) {
            self::Published => 'success',
            self::Draft => 'secondary',
        };
    }
}