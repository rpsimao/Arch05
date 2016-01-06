
<?php

require_once 'Zend/View/Interface.php';
/**
 * NavBar helper
 *
 * @uses viewHelper Application_View_Helper
 */
class Application_View_Helper_Back extends Zend_View_Helper_Abstract
{
    /**
     *
     * @var Zend_View_Interface
     */
    public $view;
    /**
     */



    public function back ()
    {

        $html = '<p><a href="/"><small><<</small></a></p>';
        return $html;
    }
    /**
     * Sets the view field
     *
     * @param $view Zend_View_Interface
     */
    public function setView (Zend_View_Interface $view)
    {
        $this->view = $view;
    }
}