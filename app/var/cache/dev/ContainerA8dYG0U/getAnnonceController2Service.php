<?php

namespace ContainerA8dYG0U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnonceController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BackEnd\AnnonceController' shared autowired service.
     *
     * @return \App\Controller\BackEnd\AnnonceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BackEnd/AnnonceController.php';

        $container->services['App\\Controller\\BackEnd\\AnnonceController'] = $instance = new \App\Controller\BackEnd\AnnonceController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\BackEnd\\AnnonceController', $container));

        return $instance;
    }
}
