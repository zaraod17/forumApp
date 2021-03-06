<?php

namespace ContainerHk7rCn4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KdYe7N3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KdYe7N3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KdYe7N3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'postsRepository' => ['privates', 'App\\Repository\\PostsRepository', 'getPostsRepositoryService', true],
        ], [
            'paginator' => '?',
            'postsRepository' => 'App\\Repository\\PostsRepository',
        ]);
    }
}
