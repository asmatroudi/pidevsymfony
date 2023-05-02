<?php

namespace ContainerLZQrKLA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QJVB7RLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qJVB7RL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qJVB7RL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activity' => ['privates', '.errored..service_locator.qJVB7RL.App\\Entity\\Activities', NULL, 'Cannot autowire service ".service_locator.qJVB7RL": it references class "App\\Entity\\Activities" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'activity' => 'App\\Entity\\Activities',
            'entityManager' => '?',
        ]);
    }
}
