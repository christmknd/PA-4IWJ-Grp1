<?php

namespace ContainerA8dYG0U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PVeLdGFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PVeLdGF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PVeLdGF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AnnonceController::delete' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\AnnonceController::edit' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\AnnonceController::index' => ['privates', '.service_locator.d4rjvn4', 'get_ServiceLocator_D4rjvn4Service', true],
            'App\\Controller\\AnnonceController::show' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\AnnonceController::toggle_etat' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\AdminController::index' => ['privates', '.service_locator.Ac4EosV', 'get_ServiceLocator_Ac4EosVService', true],
            'App\\Controller\\BackEnd\\AdminController::registerAdmin' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\BackEnd\\AnnonceController::delete' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\AnnonceController::edit' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\AnnonceController::index' => ['privates', '.service_locator.d4rjvn4', 'get_ServiceLocator_D4rjvn4Service', true],
            'App\\Controller\\BackEnd\\AnnonceController::show' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\AnnonceController::toggle_etat' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\EvenementController::add_annonce_to_evenement' => ['privates', '.service_locator.acWOF6e', 'get_ServiceLocator_AcWOF6eService', true],
            'App\\Controller\\BackEnd\\EvenementController::delete' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\BackEnd\\EvenementController::edit' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\BackEnd\\EvenementController::index' => ['privates', '.service_locator.7sw9MSK', 'get_ServiceLocator_7sw9MSKService', true],
            'App\\Controller\\BackEnd\\EvenementController::remove_annonce_from_evenement' => ['privates', '.service_locator.acWOF6e', 'get_ServiceLocator_AcWOF6eService', true],
            'App\\Controller\\BackEnd\\EvenementController::show' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\BackEnd\\EvenementController::toggle_etat' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\BackEnd\\UserController::delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\BackEnd\\UserController::edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\BackEnd\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\BackEnd\\UserController::new' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\BackEnd\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\DefaultController::index' => ['privates', '.service_locator.Ac4EosV', 'get_ServiceLocator_Ac4EosVService', true],
            'App\\Controller\\EvenementController::add_annonce_to_evenement' => ['privates', '.service_locator.acWOF6e', 'get_ServiceLocator_AcWOF6eService', true],
            'App\\Controller\\EvenementController::delete' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController::edit' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController::index' => ['privates', '.service_locator.7sw9MSK', 'get_ServiceLocator_7sw9MSKService', true],
            'App\\Controller\\EvenementController::remove_annonce_from_evenement' => ['privates', '.service_locator.acWOF6e', 'get_ServiceLocator_AcWOF6eService', true],
            'App\\Controller\\EvenementController::show' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController::toggle_etat' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\FavoriController::annonce_toggle_favori' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\FavoriController::evenement_toggle_favori' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\FavoriController::indexFavori' => ['privates', '.service_locator.Ac4EosV', 'get_ServiceLocator_Ac4EosVService', true],
            'App\\Controller\\FavoriController::indexFavoriAnnonce' => ['privates', '.service_locator.d4rjvn4', 'get_ServiceLocator_D4rjvn4Service', true],
            'App\\Controller\\FavoriController::indexFavoriEvenement' => ['privates', '.service_locator.7sw9MSK', 'get_ServiceLocator_7sw9MSKService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\RegistrationController::registerAssociation' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\RegistrationController::registerPerson' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.ph1lUSX', 'get_ServiceLocator_Ph1lUSXService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AnnonceController:delete' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\AnnonceController:edit' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\AnnonceController:index' => ['privates', '.service_locator.d4rjvn4', 'get_ServiceLocator_D4rjvn4Service', true],
            'App\\Controller\\AnnonceController:show' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\AnnonceController:toggle_etat' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\AdminController:index' => ['privates', '.service_locator.Ac4EosV', 'get_ServiceLocator_Ac4EosVService', true],
            'App\\Controller\\BackEnd\\AdminController:registerAdmin' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\BackEnd\\AnnonceController:delete' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\AnnonceController:edit' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\AnnonceController:index' => ['privates', '.service_locator.d4rjvn4', 'get_ServiceLocator_D4rjvn4Service', true],
            'App\\Controller\\BackEnd\\AnnonceController:show' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\AnnonceController:toggle_etat' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\BackEnd\\EvenementController:add_annonce_to_evenement' => ['privates', '.service_locator.acWOF6e', 'get_ServiceLocator_AcWOF6eService', true],
            'App\\Controller\\BackEnd\\EvenementController:delete' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\BackEnd\\EvenementController:edit' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\BackEnd\\EvenementController:index' => ['privates', '.service_locator.7sw9MSK', 'get_ServiceLocator_7sw9MSKService', true],
            'App\\Controller\\BackEnd\\EvenementController:remove_annonce_from_evenement' => ['privates', '.service_locator.acWOF6e', 'get_ServiceLocator_AcWOF6eService', true],
            'App\\Controller\\BackEnd\\EvenementController:show' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\BackEnd\\EvenementController:toggle_etat' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\BackEnd\\UserController:delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\BackEnd\\UserController:edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\BackEnd\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\BackEnd\\UserController:new' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\BackEnd\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\DefaultController:index' => ['privates', '.service_locator.Ac4EosV', 'get_ServiceLocator_Ac4EosVService', true],
            'App\\Controller\\EvenementController:add_annonce_to_evenement' => ['privates', '.service_locator.acWOF6e', 'get_ServiceLocator_AcWOF6eService', true],
            'App\\Controller\\EvenementController:delete' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController:edit' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController:index' => ['privates', '.service_locator.7sw9MSK', 'get_ServiceLocator_7sw9MSKService', true],
            'App\\Controller\\EvenementController:remove_annonce_from_evenement' => ['privates', '.service_locator.acWOF6e', 'get_ServiceLocator_AcWOF6eService', true],
            'App\\Controller\\EvenementController:show' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController:toggle_etat' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\FavoriController:annonce_toggle_favori' => ['privates', '.service_locator.wcYvi5i', 'get_ServiceLocator_WcYvi5iService', true],
            'App\\Controller\\FavoriController:evenement_toggle_favori' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\FavoriController:indexFavori' => ['privates', '.service_locator.Ac4EosV', 'get_ServiceLocator_Ac4EosVService', true],
            'App\\Controller\\FavoriController:indexFavoriAnnonce' => ['privates', '.service_locator.d4rjvn4', 'get_ServiceLocator_D4rjvn4Service', true],
            'App\\Controller\\FavoriController:indexFavoriEvenement' => ['privates', '.service_locator.7sw9MSK', 'get_ServiceLocator_7sw9MSKService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\RegistrationController:registerAssociation' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\RegistrationController:registerPerson' => ['privates', '.service_locator.uynpuB3', 'get_ServiceLocator_UynpuB3Service', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.ph1lUSX', 'get_ServiceLocator_Ph1lUSXService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AnnonceController::delete' => '?',
            'App\\Controller\\AnnonceController::edit' => '?',
            'App\\Controller\\AnnonceController::index' => '?',
            'App\\Controller\\AnnonceController::show' => '?',
            'App\\Controller\\AnnonceController::toggle_etat' => '?',
            'App\\Controller\\BackEnd\\AdminController::index' => '?',
            'App\\Controller\\BackEnd\\AdminController::registerAdmin' => '?',
            'App\\Controller\\BackEnd\\AnnonceController::delete' => '?',
            'App\\Controller\\BackEnd\\AnnonceController::edit' => '?',
            'App\\Controller\\BackEnd\\AnnonceController::index' => '?',
            'App\\Controller\\BackEnd\\AnnonceController::show' => '?',
            'App\\Controller\\BackEnd\\AnnonceController::toggle_etat' => '?',
            'App\\Controller\\BackEnd\\EvenementController::add_annonce_to_evenement' => '?',
            'App\\Controller\\BackEnd\\EvenementController::delete' => '?',
            'App\\Controller\\BackEnd\\EvenementController::edit' => '?',
            'App\\Controller\\BackEnd\\EvenementController::index' => '?',
            'App\\Controller\\BackEnd\\EvenementController::remove_annonce_from_evenement' => '?',
            'App\\Controller\\BackEnd\\EvenementController::show' => '?',
            'App\\Controller\\BackEnd\\EvenementController::toggle_etat' => '?',
            'App\\Controller\\BackEnd\\UserController::delete' => '?',
            'App\\Controller\\BackEnd\\UserController::edit' => '?',
            'App\\Controller\\BackEnd\\UserController::index' => '?',
            'App\\Controller\\BackEnd\\UserController::new' => '?',
            'App\\Controller\\BackEnd\\UserController::show' => '?',
            'App\\Controller\\DefaultController::index' => '?',
            'App\\Controller\\EvenementController::add_annonce_to_evenement' => '?',
            'App\\Controller\\EvenementController::delete' => '?',
            'App\\Controller\\EvenementController::edit' => '?',
            'App\\Controller\\EvenementController::index' => '?',
            'App\\Controller\\EvenementController::remove_annonce_from_evenement' => '?',
            'App\\Controller\\EvenementController::show' => '?',
            'App\\Controller\\EvenementController::toggle_etat' => '?',
            'App\\Controller\\FavoriController::annonce_toggle_favori' => '?',
            'App\\Controller\\FavoriController::evenement_toggle_favori' => '?',
            'App\\Controller\\FavoriController::indexFavori' => '?',
            'App\\Controller\\FavoriController::indexFavoriAnnonce' => '?',
            'App\\Controller\\FavoriController::indexFavoriEvenement' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::registerAssociation' => '?',
            'App\\Controller\\RegistrationController::registerPerson' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AnnonceController:delete' => '?',
            'App\\Controller\\AnnonceController:edit' => '?',
            'App\\Controller\\AnnonceController:index' => '?',
            'App\\Controller\\AnnonceController:show' => '?',
            'App\\Controller\\AnnonceController:toggle_etat' => '?',
            'App\\Controller\\BackEnd\\AdminController:index' => '?',
            'App\\Controller\\BackEnd\\AdminController:registerAdmin' => '?',
            'App\\Controller\\BackEnd\\AnnonceController:delete' => '?',
            'App\\Controller\\BackEnd\\AnnonceController:edit' => '?',
            'App\\Controller\\BackEnd\\AnnonceController:index' => '?',
            'App\\Controller\\BackEnd\\AnnonceController:show' => '?',
            'App\\Controller\\BackEnd\\AnnonceController:toggle_etat' => '?',
            'App\\Controller\\BackEnd\\EvenementController:add_annonce_to_evenement' => '?',
            'App\\Controller\\BackEnd\\EvenementController:delete' => '?',
            'App\\Controller\\BackEnd\\EvenementController:edit' => '?',
            'App\\Controller\\BackEnd\\EvenementController:index' => '?',
            'App\\Controller\\BackEnd\\EvenementController:remove_annonce_from_evenement' => '?',
            'App\\Controller\\BackEnd\\EvenementController:show' => '?',
            'App\\Controller\\BackEnd\\EvenementController:toggle_etat' => '?',
            'App\\Controller\\BackEnd\\UserController:delete' => '?',
            'App\\Controller\\BackEnd\\UserController:edit' => '?',
            'App\\Controller\\BackEnd\\UserController:index' => '?',
            'App\\Controller\\BackEnd\\UserController:new' => '?',
            'App\\Controller\\BackEnd\\UserController:show' => '?',
            'App\\Controller\\DefaultController:index' => '?',
            'App\\Controller\\EvenementController:add_annonce_to_evenement' => '?',
            'App\\Controller\\EvenementController:delete' => '?',
            'App\\Controller\\EvenementController:edit' => '?',
            'App\\Controller\\EvenementController:index' => '?',
            'App\\Controller\\EvenementController:remove_annonce_from_evenement' => '?',
            'App\\Controller\\EvenementController:show' => '?',
            'App\\Controller\\EvenementController:toggle_etat' => '?',
            'App\\Controller\\FavoriController:annonce_toggle_favori' => '?',
            'App\\Controller\\FavoriController:evenement_toggle_favori' => '?',
            'App\\Controller\\FavoriController:indexFavori' => '?',
            'App\\Controller\\FavoriController:indexFavoriAnnonce' => '?',
            'App\\Controller\\FavoriController:indexFavoriEvenement' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:registerAssociation' => '?',
            'App\\Controller\\RegistrationController:registerPerson' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
