<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initRouter() {
        $front = $this->bootstrap('FrontController')->getResource('FrontController');
        $router = $front->getRouter();
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/routes.ini', 'production');
        $routing = new Zend_Controller_Router_Rewrite();
        $routing->addConfig($config, 'routes');
        $front->setRouter($routing);
    }

    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }

}

