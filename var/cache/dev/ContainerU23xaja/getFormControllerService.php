<?php

namespace ContainerU23xaja;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FormController' shared autowired service.
     *
     * @return \App\Controller\FormController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FormController.php';

        $container->services['App\\Controller\\FormController'] = $instance = new \App\Controller\FormController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\FormController', $container));

        return $instance;
    }
}
