<?php

namespace Mesostiche\Service\ViewHelper;

use Interop\Container\ContainerInterface;
use Mesostiche\View\Helper\Mesostiche;
use Laminas\ServiceManager\Factory\FactoryInterface;

class MesosticheFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        $entityManager = $services->get('Omeka\EntityManager');
        $apiAdapterManager = $services->get('Omeka\ApiAdapterManager');

        return new Mesostiche($entityManager, $apiAdapterManager);
    }
}
