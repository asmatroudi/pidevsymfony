<?php

namespace ContainerYntd5w4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BTDxrOMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BTDxrOM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BTDxrOM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event' => ['privates', '.errored..service_locator.BTDxrOM.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.BTDxrOM": it references class "App\\Entity\\Evenement" but no such service exists.'],
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationEventRepository', 'getParticipationEventRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'event' => 'App\\Entity\\Evenement',
            'participationRepository' => 'App\\Repository\\ParticipationEventRepository',
            'userRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}