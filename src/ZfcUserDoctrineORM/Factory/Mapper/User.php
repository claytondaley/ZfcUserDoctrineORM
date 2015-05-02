<?php
namespace ZfcUserDoctrineORM\Factory\Mapper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZfcUserDoctrineORM\Mapper;

class User implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new Mapper\User(
            $serviceLocator->get('zfcuser_doctrine_em'),
            $serviceLocator->get('zfcuser_doctrineorm_module_options')
        );
    }
}