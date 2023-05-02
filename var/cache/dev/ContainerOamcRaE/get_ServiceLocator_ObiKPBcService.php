<?php

namespace ContainerOamcRaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ObiKPBcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.obiKPBc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.obiKPBc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'gouvernorat' => ['privates', '.errored..service_locator.obiKPBc.App\\Entity\\Gouvernorat', NULL, 'Cannot autowire service ".service_locator.obiKPBc": it references class "App\\Entity\\Gouvernorat" but no such service exists.'],
        ], [
            'gouvernorat' => 'App\\Entity\\Gouvernorat',
        ]);
    }
}
