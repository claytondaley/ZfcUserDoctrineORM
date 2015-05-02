<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'zfcuser_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/xml/zfcuser'
            ),

            'orm_default' => array(
                'drivers' => array(
                    'ZfcUser\Entity'  => 'zfcuser_entity'
                )
            )
        )
    ),

    'service_manager' => array(
        'invokables' => array(),
        'factories' => array(
            'zfcuser_doctrineorm_module_options' => 'ZfcUserDoctrineORM\Factory\Options\ModuleOptionsFactory',
        ),
    ),
);
