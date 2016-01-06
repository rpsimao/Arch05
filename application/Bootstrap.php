<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initTranslate()
    {


        $locale = null;

        $session = new Zend_Session_Namespace('rps.l10n');
        if ($session->locale) {
            $locale = new Zend_Locale($session->locale);
        }

        if ($locale === null) {

            try {
                $locale = new Zend_Locale('browser');
            } catch (Zend_Locale_Exception $e) {
                $locale = new Zend_Locale('en_US');
            }
        }

        $registry = Zend_Registry::getInstance();
        $registry->set('Zend_Locale', $locale);


        $translate = new Zend_Translate( array(
                'adapter' => 'Csv',
                'content' => APPLICATION_PATH . '/languages/pt_PT/pt_PT.csv',
                'locale'  => 'pt_PT'
            )
        );
        $translate->addTranslation(
            array(
                'adapter' => 'Csv',
                'content' => APPLICATION_PATH . '/languages/en_GB/en_GB.csv',
                'locale' => 'en_US'
            )
        );


        $translate->getAdapter()->setLocale(Zend_Locale::findLocale());
        $registry = Zend_Registry::getInstance();
        $registry->set('Zend_Translate', $translate);


    }


		protected function _initHeader ()
        {
            $this->bootstrap('layout');
            $layout = $this->getResource('layout');
            $view = $layout->getView();
            $view->translate = Zend_Registry::get('Zend_Translate');
            $view->addHelperPath(APPLICATION_PATH . "/views/helpers", "Application_View_Helper");
            $view->doctype("HTML5");
            $view->headTitle('AR-CH-05');
            $view->headLink()->headLink(array('rel' => 'favicon', 'href' => '/images/comuns/favicon.ico'), 'PREPEND');
            $view->headLink()->headLink(array('rel' => 'icon', 'href' => '/images/comuns/favicon.ico'), 'PREPEND');
            //$view->headMeta()->appendHttpEquiv('Content-Language', str_replace("_", '-', Zend_Locale::findLocale()));
            $view->headMeta()->appendName('Developer', 'Ricardo Simao');
            $view->headMeta()->appendName('Email', 'rpsimao@gmail.com');
            $view->headMeta()->appendName('Copyright', 'Arch05');
            $view->headMeta()->appendName('Zend Framework', Zend_Version::VERSION);
            $view->headLink()->appendStylesheet('/css/bootstrap.min.css');
            $view->headLink()->appendStylesheet('/css/bootstrap-theme.min.css');
            $view->headLink()->appendStylesheet('/css/styles.css');
            $view->headLink()->appendStylesheet('/css/font-awesome.min.css');
            $view->headLink()->appendStylesheet('/css/normalize.css');
            $view->headLink()->appendStylesheet('/css/set1.css');
            $view->headScript()->appendFile('/js/jquery.js', 'text/javascript');
            $view->headScript()->appendFile('/js/bootstrap.min.js', 'text/javascript');
            $view->headScript()->appendFile('/js/custom.js', 'text/javascript');

        }
		
		protected function _initRoutes ()
	    {
	
	        $router = Zend_Controller_Front::getInstance()->getRouter();
	
	        $route = new Zend_Controller_Router_Route('/project/:filename', array(
	            'module' => 'default',
	            'controller' => 'project' ,
	            'action' => 'index'));
	        $router->addRoute('default_project_index', $route);
			

		}

}

