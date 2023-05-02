<?php

namespace ContainerLZQrKLA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T_POKykService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t.pOKyk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t.pOKyk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'participationActivity' => ['privates', '.errored..service_locator.t.pOKyk.App\\Entity\\ParticipationActivity', NULL, 'Cannot autowire service ".service_locator.t.pOKyk": it references class "App\\Entity\\ParticipationActivity" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'participationActivity' => 'App\\Entity\\ParticipationActivity',
        ]);
    }
}
