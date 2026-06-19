# phpsession

Uma forma simplificada para trabalhar com sessão do navegador.

```php

<?php

require __DIR__."/../vendor/autoload.php";

use PureSession\Session;

$pures = new Session();

$pures->start();

$pures->set('flash', 11);
// echo $pures->has('flash');
```