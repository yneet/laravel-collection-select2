<?php

namespace Yneet\CollectionSelect2;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class CollectionSelect2ServiceProvider extends ServiceProvider
{
    public function register()
    {
        foreach ($this->macros() as $macro => $class) {
            if (! Collection::hasMacro($macro)) {
                Collection::macro($macro, app($class)());
            }
        }
    }

    private function macros(): array
    {
        return [
            'toSelect2Grouped' => \Yneet\CollectionSelect2\Macros\Grouped::class,
        ];
    }
}
