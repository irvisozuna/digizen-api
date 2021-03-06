# DigizenWrapper

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require irvisozuna/digizenwrapper
```

Publish files
``` bash
$ php artisan vendor:publish --provider="IrvisOzuna\DigizenWrapper\DigizenWrapperServiceProvider"
```


## Usage
$wrapper    = DigizenWrapper::build();
$options    = ['shareType'=>3,'path'=>'/invoices/0001.txt','shareWith'=>''];
$response   = $wrapper->getSharesClient()->createShare($options)->getData();
return response()->json($response);

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/irvisozuna/digizenwrapper.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/irvisozuna/digizenwrapper.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/irvisozuna/digizenwrapper/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/irvisozuna/digizenwrapper
[link-downloads]: https://packagist.org/packages/irvisozuna/digizenwrapper
[link-travis]: https://travis-ci.org/irvisozuna/digizenwrapper
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/irvisozuna
[link-contributors]: ../../contributors]
