<?php

namespace ContainerFbg44Sx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLigneFraisHorsForfaitTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\LigneFraisHorsForfaitType' shared autowired service.
     *
     * @return \App\Form\LigneFraisHorsForfaitType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/LigneFraisHorsForfaitType.php';

        return $container->privates['App\\Form\\LigneFraisHorsForfaitType'] = new \App\Form\LigneFraisHorsForfaitType();
    }
}
