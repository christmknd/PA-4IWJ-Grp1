<?php

namespace ContainerA8dYG0U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTriAnnonceTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Tri\TriAnnonceType' shared autowired service.
     *
     * @return \App\Form\Tri\TriAnnonceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Tri/TriAnnonceType.php';

        return $container->privates['App\\Form\\Tri\\TriAnnonceType'] = new \App\Form\Tri\TriAnnonceType();
    }
}
