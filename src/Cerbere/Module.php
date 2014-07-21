<?php
/**
 * Cerbere - Cerbere phpCAS and Zend Framework 2 User Module
 *
 * @link https://github.com/Alexandre-T/gmao for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Alexandre Tranchant
 * @license https://github.com/Alexandre-T/gmao/blob/master/LICENSE MIT
 * @author Alexandre Tranchant <Alexandre.Tranchant@gmail.com>
 */

namespace Cerbere;

class Module
{
    /*public function onBootstrap(EventInterface $event)
    {
        $serviceManager = $event->getApplication()->getServiceManager();
        $sessionLifeTime = $serviceManager->get('cerbere_module_options')->getSessionLifeTime();
        $host = $serviceManager->get('Request')->getUri()->getHost();

        $sessionConfig = new SessionConfig();
        $sessionConfig->setOptions(array(
            'cookie_httponly' => true,
            'cookie_domain' => $host,
            'gc_maxlifetime' => 60*$sessionLifeTime,
            'remember_me_seconds' => 60*$sessionLifeTime,
        ));

        $sessionManager = new SessionManager($sessionConfig);
        $sessionManager->start();
        Container::setDefaultManager($sessionManager);
    }*/

    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/../../src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
