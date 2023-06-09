<?php

namespace ContainerYntd5w4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NIvFPFxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NIvFPFx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NIvFPFx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'participationActivity' => ['privates', '.errored..service_locator.NIvFPFx.App\\Entity\\ParticipationActivity', NULL, 'Cannot autowire service ".service_locator.NIvFPFx": it references class "App\\Entity\\ParticipationActivity" but no such service exists.'],
        ], [
            'participationActivity' => 'App\\Entity\\ParticipationActivity',
        ]);
    }
}
