<?php

namespace Anax\App;

use Anax\App\App;
use Anax\DI\InjectionAwareInterface;
use Anax\DI\InjectionAwareTrait;

/**
 * An App class to wrap the resources of the framework, prepared to use a
 * DI container.
 */
class AppDI extends App implements InjectionAwareInterface
{
    use InjectionAwareTrait;
}
