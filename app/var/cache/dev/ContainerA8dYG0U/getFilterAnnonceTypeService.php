<?php

namespace ContainerA8dYG0U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilterAnnonceTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\FilterAnnonceType' shared autowired service.
     *
     * @return \App\Form\FilterAnnonceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/FilterAnnonceType.php';

        return $container->privates['App\\Form\\FilterAnnonceType'] = new \App\Form\FilterAnnonceType();
    }
}