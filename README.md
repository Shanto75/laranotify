
# `Laranotify`
A simple but beautiful notification package for Laravel

## Installation

Install Laranotify with composer

```sh
  composer require shanto75/laranotify
```


## Configuration
**Service Provider Registration**
In `config/app.php`, add in `providers` array -

```php
  'providers' => [
    // ...
    Shanto75\\Laranotify\\LaranotifyServiceProvider::class,
    // ...
],
```

**Facade Class Alias**
Add in aliases array - 
```php
'aliases' => Facade::defaultAliases()->merge([
    // ...
    'Laranotify' => Shanto75\\Laranotify\\Laranotify::class,
    // ...
])->toArray(),
```


#### Import first the Laranotify facade
```php
use Shanto75\Laranotify\Facades\Laranotify;
```

### Example #01-
```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shanto75\Laranotify\Facades\Laranotify;

class HomeController extends Controller
{
    public function index(){
        Laranotify::notify('Saved successfully!');
        return view('welcome');
    }
}

 ```