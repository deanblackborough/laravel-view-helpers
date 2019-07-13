[![Latest Stable Version](https://img.shields.io/packagist/v/deanblackborough/laravel-view-helpers.svg?style=flat-square)](https://packagist.org/packages/deanblackborough/laravel-view-helpers)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/deanblackborough/php-quill-renderer/blob/master/LICENSE)

# Laravel view helpers

A Collection of general and bootstrap specific view helpers.
 
## Description

A growing collection of Bootstrap 4 based and general view helpers that I 
use across my Laravel projects, some of them may be useful to you, full details 
of each view helper is below.

## Installation

The easiest way to include these view helpers is via `composer`, simply execute 
`composer require deanblackborough/laravel-view-helpers` in your 
terminal/console of choice.

After automatic discovery you can publish the view files with `vendor:publish`. 
As it is unlikely your needs will exactly match mine it is recommended you 
publish the view files and then tweak them in `views/vendor/laravel-view-helper`.

## The view helpers

### Pagination

![Pagination example](images/pagination.png)

A simple pagination view helper, next and previous buttons, current status, 
first to last and a select menu with paging limits.

```
@include(
    'laravel-view-helpers::pagination', 
    [
        'offset' => 0, // Current offset [integer]
        'total' => 1000, // Totoal number of items [integer]
        'limit' => 50, // Current limit [integer]
        'limit_options' => [50, 100, 250, ...], // Limit options [array]
        'uri' => [
            'base' => '/path/to/current/page', // Base uri [string]
            'parameters' => ['param1'=>'value1', ...], // Current GET parameters to add to uris [array]
            'anchor' => '#section-to-jump-to', // Optional named anchor [string|null]
        ],
        'count_prefix' => 'Expenses', // Optional prefex for from:to [string|null]
        'css_classes' => [
            'left' => ' col-9 col-sm-10 col-xl-11', // Class for left container [string|null]
            'right' => ' col-3 col-sm-2 col-xl-1', // Classes for right container [string|null]
        ]
    ]
)
```
