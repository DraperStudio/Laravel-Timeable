#  Laravel Timeable

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-timeable
```

## Usage

### Setup a Model
``` php
<?php

namespace App;

use BrianFaust\Timeables\HasTimesTrait;
use BrianFaust\Timeables\Interfaces\HasTimes;
use Illuminate\Database\Eloquent\Model;

class Store extends Model implements HasTimes
{
    use HasTimesTrait;
}
```

``` php
$model->addTime('Monday', '08:00', '18:00');
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
