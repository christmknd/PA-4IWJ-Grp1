<?php

namespace Container3Tsg6D1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WcYvi5iService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.wcYvi5i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wcYvi5i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annonce' => ['privates', '.errored..service_locator.wcYvi5i.App\\Entity\\Annonce', NULL, 'Cannot autowire service ".service_locator.wcYvi5i": it references class "App\\Entity\\Annonce" but no such service exists.'],
        ], [
            'annonce' => 'App\\Entity\\Annonce',
        ]);
    }
}
