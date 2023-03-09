<?php

namespace ContainerAtCD28w;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreditsInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CreditsInterface' shared autowired service.
     *
     * @return \App\Service\CreditsInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'CreditsInterface.php';

        return $container->privates['App\\Service\\CreditsInterface'] = new \App\Service\CreditsInterface();
    }
}
