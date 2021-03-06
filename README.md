# phpToolboxBundle

Integrate [cyberomulus/phpToolbox](https://github.com/cyberomulus/phpToolbox) in symfony service

## Installation

### Applications that use Symfony Flex

Open a command console, enter your project directory and execute:

```console
$ composer require cyberomulus/php-toolbox-bundle:1.*
```

### Applications that don't use Symfony Flex

#### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require cyberomulus/php-toolbox-bundle:1.*
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

#### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new cyberomulus\phpToolboxBundle\CyberomulusPhpToolboxBundle,
        );

        // ...
    }

    // ...
}
```

## Usage

[The main class (PhpToolbox)](https://github.com/cyberomulus/phpToolbox/blob/master/src/PhpToolbox.php) of [cyberomulus/phpToolbox](https://github.com/cyberomulus/phpToolbox) is now a public service.

Sample in controller :

```php
<?php
// src/Controller/ProductController.php

use Cyberomulus\PhpToolbox\PhpToolbox

/**
 * @Route("/products")
 */
public function list(PhpToolbox $phpToolbox)
{
    $randomString = $phpToolbox->getText()->random();

    // ...
}
```

For usage of [cyberomulus/phpToolbox](https://github.com/cyberomulus/phpToolbox), please read [his documentation](https://github.com/cyberomulus/phpToolbox/blob/master/docs/00-PhpToolBox.md).

## License

This library is open-source software licensed under the [MIT license](http://opensource.org/licenses/MIT).