
<?php

require_once 'Zend/View/Interface.php';
/**
 * NavBar helper
 *
 * @uses viewHelper Application_View_Helper
 */
class Application_View_Helper_FilterType extends Zend_View_Helper_Abstract
{
    /**
     *
     * @var Zend_View_Interface
     */
    public $view;
    /**
     */



    public function FilterType ()
    {


    $controller = Zend_Controller_Front::getInstance()->getRequest()->getControllerName();
    $action = Zend_Controller_Front::getInstance()->getRequest()->getActionName();

    if ($controller == "index" && $action == "index") {


        $html ='<div class="dropdown" style="margin-left: 30px; z-index: 10000" id="filtro-procura">';
        $html.='<div id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
        $html.=$this->view->translate("Type");
        $html.='        <span class="caret"></span>';
        $html.='    </div>';
        $html.='   <ul class="dropdown-menu" aria-labelledby="dLabel">';
        $html.=    '<li><a href="#" onclick="filterShowAll()">'.$this->view->translate("All").'</a></li>';
        $html.=        '<li><a href="#" onclick="filter(\'construcao\')">'.$this->view->translate("Construction").'</a></li>';
        $html.=        '<li><a href="#" onclick="filter(\'remodelacao\')">'.$this->view->translate("Refurbishment").'</a></li>';
        $html.=        '<li><a href="#" onclick="filter(\'design\')">'.$this->view->translate("Design").'</a></li>';
        $html.=    '</ul>';
        $html.='</div>';

        return $html;
  }

}






    public function setView (Zend_View_Interface $view)
    {
        $this->view = $view;
    }
}