<?php

namespace ContainerYntd5w4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_40rZyaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4_0rZya' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4_0rZya'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'hotelRepository' => ['privates', 'App\\Repository\\HotelRepository', 'getHotelRepositoryService', true],
        ], [
            'entityManager' => '?',
            'hotelRepository' => 'App\\Repository\\HotelRepository',
        ]);
    }
}
