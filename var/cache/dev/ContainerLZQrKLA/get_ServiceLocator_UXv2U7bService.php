<?php

namespace ContainerLZQrKLA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UXv2U7bService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uXv2U7b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uXv2U7b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'gouvernorat' => ['privates', '.errored..service_locator.uXv2U7b.App\\Entity\\Gouvernorat', NULL, 'Cannot autowire service ".service_locator.uXv2U7b": it references class "App\\Entity\\Gouvernorat" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'gouvernorat' => 'App\\Entity\\Gouvernorat',
        ]);
    }
}
