<?php

namespace Anax\App;

use Anax\App\AppDI;
use Anax\DI\InjectionMagicTrait;

/**
 * An App class to wrap the resources of the framework, prepared to use a
 * DI container with magic methods enabled.
 */
class AppDIMagic extends AppDI
{
    use InjectionMagicTrait;
}
