# Hello World 👋

Simple Hello World package for PHP 7.3+

[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/thinkverse/hello-world/Unit%20Testing/master)](https://github.com/thinkverse/hello-world/actions) [![Packagist Version](https://img.shields.io/packagist/v/thinkverse/hello-world)](https://packagist.org/packages/thinkverse/hello-world) [![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/thinkverse/hello-world)](https://packagist.org/packages/thinkverse/hello-world) [![GitHub license](https://img.shields.io/github/license/thinkverse/hello-world)](https://github.com/thinkverse/hello-world/blob/master/LICENSE)

## Installation
Use the dependancy mananger [composer] to install HelloWorld.

```bash
composer require thinkverse/hello-world
```

## Usage
```php
use Thinkverse\HelloWorld;

$helloWorld = new HelloWorld();
$helloJohnDoe = new HelloWorld('John Doe');

print $helloWorld->greeting(); // Hello World
print $helloJohnDoe->greeting(); // Hello John Doe

print $helloWorld->greet('Jane Doe'); // Hello Jane Doe
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT]

[composer]: https://getcomposer.org/
[mit]: https://choosealicense.com/licenses/mit/