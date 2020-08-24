# A set of useful Laravel collection macros for Select2

This repository contains some useful collection macros for Select2.

## Installation

You can pull in the package via composer:

``` bash
composer require yneet/laravel-collection-select2
```

The package will automatically register itself.

## Macros

- [`toSelectGrouped`](#toSelectGrouped)

### `toSelect2Grouped`

Transform the collection inline to grouped for Select2 Ajax/Data format (see : https://select2.org/data-sources/formats#grouped-data).

```php
$collection = collect([
    ['text' => 'Title 1', 'id' => 1, 'group' => 'Group 1'],
    ['text' => 'Title 2', 'id' => 2, 'group' => 'Group 1'],
    ...
]);

$collection->toSelect2Grouped('group');

// [
//     [
//         'text' => 'Group 1',
//         'children' => [
//             ['text' => 'Title 1', 'id' => 1, 'group' => 'Group 1'],
//             ['text' => 'Title 2', 'id' => 2, 'group' => 'Group 1']
//         ]
//     ],
//     ...
// ];
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
