<?php

namespace ZfcUserDoctrineORM;

use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Zend\EventManager\Event;
use Zend\Mvc\Application;

class Module
{
    /**
     * @param Event $e
     */
    public function onBootstrap($e)
    {
        /** @var Application $app */
        $app     = $e->getParam('application');
        $sm      = $app->getServiceManager();
        $options = $sm->get('zfcuser_module_options');

        // Add the default entity driver only if specified in configuration
        if ($options->getEnableDefaultEntities()) {
            $chain = $sm->get('doctrine.driver.orm_default');
            $chain->addDriver(new XmlDriver(__DIR__ . '/config/xml/zfcuserdoctrineorm'), 'ZfcUserDoctrineORM\Entity');
        }
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return include __DIR__ . '/config/service.config.php';
    }
}
