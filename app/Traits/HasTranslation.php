<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

trait HasTranslation {
    public static function translation(Model $model)
    {
        if (strtolower(request()->method()) !== 'put') {
            $translationColumns = collect(Cache::remember($model->getTable(), now()->week(), fn() => Schema::getColumnListing($model->getTable())))
                ->filter(fn($item) => str($item)->endsWith('_ar'))
                ->map(fn($item) => str($item)->replaceEnd('_ar', ''))
                ->toArray();

            foreach ($translationColumns as $key) {
                $model->{$key} = app()->getLocale() == 'ar' ? $model->{$key . '_ar'} : $model->{$key . '_en'};
            }
        }
    }
}