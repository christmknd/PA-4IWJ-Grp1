<?php

namespace Container3Tsg6D1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementVoterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\Voter\EvenementVoter' shared autowired service.
     *
     * @return \App\Security\Voter\EvenementVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
        include_once \dirname(__DIR__, 4).'/src/Security/Voter/EvenementVoter.php';

        return $container->privates['App\\Security\\Voter\\EvenementVoter'] = new \App\Security\Voter\EvenementVoter(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
