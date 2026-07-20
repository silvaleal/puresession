# phpsession

Uma forma simplificada para trabalhar com sessão do navegador.

```php

<?php

require __DIR__."/../vendor/autoload.php";

use PureSession\PureSession;

PureSession::start();

var_dump(PureSession::started());

PureSession::set('flash', 11);
// echo $pures->has('flash');
```