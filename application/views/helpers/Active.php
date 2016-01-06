
<?php

require_once 'Zend/View/Interface.php';
/**
 * NavBar helper
 *
 * @uses viewHelper Application_View_Helper
 */
class Application_View_Helper_Active extends Zend_View_Helper_Abstract
{
    /**
     *
     * @var Zend_View_Interface
     */
    public $view;
    /**
     */



    public function active ()
    {

        $controllerName = $this->getRequest()->getControllerName();
    }






    public function setView (Zend_View_Interface $view)
    {
        $this->view = $view;
    }
}