<?php

namespace ContainerE5rYCRn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8BxW8PService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.8_bxW8P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8_bxW8P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'controllerServices' => ['privates', 'App\\Services\\ControllerServices', 'getControllerServicesService', true],
        ], [
            'controllerServices' => 'App\\Services\\ControllerServices',
        ]);
    }
}
