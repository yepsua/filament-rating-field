# Ranting field for the Filament forms

<div align="center">
    <img src="https://user-images.githubusercontent.com/1541517/170590811-be2e4a1b-e3e1-4050-b239-fd74ec5c3036.png" alt="Rating">
</div>
<br/>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yepsua/filament-rating-field.svg?style=flat-square)](https://packagist.org/packages/yepsua/filament-rating-field)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/yepsua/filament-rating-field/run-tests?label=tests)](https://github.com/yepsua/filament-rating-field/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/yepsua/filament-rating-field/Check%20&%20fix%20styling?label=code%20style)](https://github.com/yepsua/filament-rating-field/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/yepsua/filament-rating-field.svg?style=flat-square)](https://packagist.org/packages/yepsua/filament-rating-field)

## Installation

You can install the package via composer:

```bash
composer require yepsua/filament-rating-field
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-rating-field-views"
```

## Usage

```php
use Yepsua\Filament\Forms\Components\Rating

...
    protected function getFormSchema(): array
    {
        return [
            ...
            Rating::make('rating')
            ...
        ];
    }
...
```

<div align="center">
    <img src="https://user-images.githubusercontent.com/1541517/170590817-ced610bc-1756-40df-a66b-f305963c90c5.png" alt="Rating">
</div>
<br/>

By default the range values goes from 1 to 5 and the icon displayed is `heroicon-o-star`

The rating fields provides several option to customize its behavior. Next some of the more used for:

#### 
### <ins>*Disabled*</ins>

```php
use Yepsua\Filament\Forms\Components\Rating

...
    protected function getFormSchema(): array
    {
        return [
            ...
            Rating::make('rating')
                ->disabled()
            ...
        ];
    }
...
```

<div align="center">
    <img src="https://user-images.githubusercontent.com/1541517/170590815-ec38c2f6-2523-4d44-934b-d3968f5007af.png" alt="Rating">
</div>
<br/>

### <ins>*Min and max values*</ins>

```php
use Yepsua\Filament\Forms\Components\Rating

...
    protected function getFormSchema(): array
    {
        return [
            ...
            Rating::make('rating')
                ->min(5)
                ->max(10)
            ...
        ];
    }
...
```

<div align="center">
    <img src="https://user-images.githubusercontent.com/1541517/170590813-4894ff7a-b6cb-45d2-9a19-70bafecaec75.png" alt="Rating">
</div>
<br/>

### <ins>*Custom icons and colors*</ins>

```php
use Yepsua\Filament\Forms\Components\Rating

...
    protected function getFormSchema(): array
    {
        return [
            ...
            Rating::make('rating')
                ->icons('heroicon-o-moon', 'heroicon-s-sun')
                ->color('orange')
            ...
        ];
    }
...
```

<div align="center">
    <img src="https://user-images.githubusercontent.com/1541517/170590812-425255b6-4f4c-49bb-b0c8-f0ca52a6d864.png" alt="Rating">
</div>
<br/>

### <ins>*Custom size*</ins>

```php
use Yepsua\Filament\Forms\Components\Rating

...
    protected function getFormSchema(): array
    {
        return [
            ...
            Rating::make('rating')
                ->size(10)
            ...
        ];
    }
...
```

<div align="center">
    <img src="https://user-images.githubusercontent.com/1541517/170590811-be2e4a1b-e3e1-4050-b239-fd74ec5c3036.png" alt="Rating">
</div>
<br/>

### <ins>*No mouse effects*</ins>

Disable the mouseenter and mouseleave animation.

```php
use Yepsua\Filament\Forms\Components\Rating

...
    protected function getFormSchema(): array
    {
        return [
            ...
            Rating::make('rating')
                ->effects(false)
            ...
        ];
    }
...
```
### <ins>*Clearable*</ins>

Allow the user to clear the rating selection.

```php
use Yepsua\Filament\Forms\Components\Rating

...
    protected function getFormSchema(): array
    {
        return [
            ...
            Rating::make('rating')
                ->clearable()
                ->clearIconColor('red')
                ->clearIconTooltip('Clear')
            ...
        ];
    }
...
```

<div align="center">
    <img src="https://user-images.githubusercontent.com/1541517/170590810-07cee8bd-0ce0-4200-b2bc-b5616e8f5dad.png" alt="Rating">
</div>
<br/>

### <ins>*Cursors*</ins>

The value of the cursor is based on the [Tailwind cursor](https://tailwindcss.com/docs/cursor). The  prefix `cursor-` its not required in the value.

```php
use Yepsua\Filament\Forms\Components\Rating

...
    protected function getFormSchema(): array
    {
        return [
            ...
            Rating::make('rating')
                ->cursor('default')
                ->clearIconTooltip('none')
            ...
        ];
    }
...
```
### <ins>*Tooltips*</ins>

```php
use Yepsua\Filament\Forms\Components\Rating

...
    protected function getFormSchema(): array
    {
        return [
            ...
            Rating::make('rating')
                ->options([
                    'Acceptable',
                    'Good',
                    'Very Good',
                    'Excellent',
                ])
            ...
        ];
    }
...
```
<div align="center">
    <img src="https://user-images.githubusercontent.com/1541517/170590808-ea0986d2-db3f-47d4-ab52-80f91667e890.png" alt="Rating">
</div>
<br/>

## Field options.

* ->color(): Set the icon colors for the rating field.
* ->disabledColor(): Set the icon color when the field is disabled. 
* ->clearIconColor(): Set the color for the clear icon.
* ->icon(): Set the icon for the default items.
* ->selectedIcon(): Set the solid icon for the selected items.
* ->clearIcon(): Set the icon for the clear action.
* ->min(): Set the min value for the rating field. Default: 1
* ->max(): Set the max value for the rating field. Default: 5
* ->width(): Set the width value for each item in the field: Default: 6
* ->height(): Set the height value for each item in the field: Default: 6
* ->size(): Set the same value for the width and height properties.
* ->effects(): Enable\Disable the mouseenter and mouseleave effects. Default: true (enabled)
* ->clearable(): Add a extra icon at the end of the rating icons. Default: false
* ->cursor(): Set the default cursor
* ->disabledCursor(): Set the cursor to be displayed when the field is disabled
* ->clearIconTooltip(): Set the tooltip for the clear icon.

You can review the default value for the options above and others in the class `App\Forms\Components\Rating` 

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/master/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Omar Yepez](https://github.com/oyepez003)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
