<?php
/**
 * Module Configuration
 *
 * @link https://github.com/Alexandre-T/gmao for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Alexandre Tranchant
 * @license https://github.com/Alexandre-T/gmao/blob/master/LICENSE MIT
 * @author Alexandre Tranchant <Alexandre.Tranchant@gmail.com>
 */
return array (
		'controllers' => array (
				'invokables' => array (
						'Cerbere\Controller\Index' => 'Cerbere\Controller\IndexController',
						'Cerbere\Controller\Registration' => 'Cerbere\Controller\RegistrationController',
				)
		),
		'router' => array (
				'routes' => array (
						'user-index' => array (
								'type' => 'Segment',
								'options' => array (
										'route' => '/user[/:action]',
										'constraints' => array (
												'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
										),
										'defaults' => array (
												'controller' => 'Cerbere\Controller\Index',
												'action' => 'index'
										)
								),
								'may_terminate' => true
						),
						'user-register' => array (
								'type' => 'Segment',
								'options' => array (
										'route' => '/user/register[/:action]',
										'constraints' => array (
												'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
										),
										'defaults' => array (
												'controller' => 'Cerbere\Controller\Registration',
												'action' => 'index'
										)
								),
								'may_terminate' => true
						),

				),
		),
		'view_manager' => array (
				'template_path_stack' => array (
						'Cerbere' => __DIR__ . '/../view'
				)
		)
);
