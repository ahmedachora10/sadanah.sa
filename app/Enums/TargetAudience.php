<?php

namespace App\Enums;

use App\Traits\HasLabel;

enum TargetAudience:string {
    use HasLabel;

    case Kids = 'kids';
    case Youths = 'Youths';
    case Men = 'Men';
    case women = 'Women';
    case TheElderly = 'The Elderly';
    case All = 'All';
}