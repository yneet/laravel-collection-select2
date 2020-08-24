<?php

namespace Yneet\CollectionSelect2\Macros;

/**
 * Transform a collection to the Select2 format grouped
 *
 * @see https://select2.org/data-sources/formats#grouped-data
 *
 * @param mixed $currentItem
 * @param mixed $fallback
 *
 * @mixin \Illuminate\Support\Collection
 *
 * @return mixed
 */
class Grouped
{
    public function __invoke()
    {
        return function ($name) {
            return $this
                ->groupBy($name)
                ->map(function ($value, $key) {
                    return [
                        'text' => $key,
                        'children' => $value
                    ];
                })
                ->values();
        };
    }
}
