<?php
namespace ZfcUserDoctrineORM\Factory\Options;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZfcUserDoctrineORM\Options;

class ModuleOptions implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        return new Options\ModuleOptions(isset($config['zfcuser']) ? $config['zfcuser'] : array());
    }
}