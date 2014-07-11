<?php

$container = ezpKernel::instance()->getServiceContainer();
$controller = $container->get( 'list.controller' );

$Result = array(
    'content' => $controller->displayAction()->getContent(),
    'content_info' => array(
        'persistent_variable' => array(
            'left_menu' => false
        ),
    ),
    'path' => array( array(
        'text' => $container->get('translator')->trans('list.of.forms', array(), 'formmaker')
    ))
);