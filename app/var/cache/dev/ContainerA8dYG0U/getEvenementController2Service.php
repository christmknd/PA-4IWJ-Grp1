<?php

namespace ContainerA8dYG0U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EvenementController' shared autowired service.
     *
     * @return \App\Controller\EvenementController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EvenementController.php';

        $container->services['App\\Controller\\EvenementController'] = $instance = new \App\Controller\EvenementController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\EvenementController', $container));

        return $instance;
    }
}