<?php

namespace ContainerTPTNxKE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VQtysSJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VQtysSJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VQtysSJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'plat' => ['privates', '.errored..service_locator.VQtysSJ.App\\Entity\\Plat', NULL, 'Cannot autowire service ".service_locator.VQtysSJ": it references class "App\\Entity\\Plat" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'plat' => 'App\\Entity\\Plat',
        ]);
    }
}
