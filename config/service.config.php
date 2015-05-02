<?php

return array(
    'invokables' => array(),
    'factories' => array(
        'zfcuser_doctrineorm_module_options' => 'ZfcUserDoctrineORM\Factory\Options\ModuleOptions',
        'zfcuser_user_mapper' => 'ZfcUserDoctrineORM\Factory\Mapper\User',
    ),
    'aliases' => array(
        'zfcuser_doctrine_em' => 'Doctrine\ORM\EntityManager',
    ),
);