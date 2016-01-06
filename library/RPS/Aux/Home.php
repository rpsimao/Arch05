<?php

/**
 * Created by PhpStorm.
 * User: rpsimao
 * Date: 05/10/15
 * Time: 10:02
 */
class RPS_Aux_Home
{


    const REMODELACAO = "remodelacao";

    const CONSTRUCAO = "construcao";

    const DESIGN = "design";

    /**
     * Image URL
     */
    private $image;
    /**
     * Test to translate
     */
    private $translate;
    /**
     * URL of ink
     */
    private $url;

    /**
     * Controller Name for building path
     */
    private $controller;


    /**
     * Id for the projects
     */
    private $id;

    /**
     * Set Controller Name for building path
     */
    public function setControllerName($controller)
    {
        $this->controller = $controller;

    }

    private function getControllerName()
    {
        return $this->controller;
    }

    /**
     * set Image Path
     * @param $image
     */
    public function setImageSrc($image)
    {
        $this->image = $image;
    }

    private function getImage()
    {
        return $this->image;
    }

    /**
     * set translate text
     * @param $translate
     */
    public function setTranslate($translate){
        $this->translate = $translate;
    }

    private function getTranslate()
    {
        return $this->translate;
    }

    /**
     * set URL of page
     * @param $url
     */
    public function setURL($url)
    {
        $this->url = $url;
    }

    private function getURL(){
        return $this->url;
    }


    public function setID($id){

        $this->id = $id;
    }


    private function getID()
    {
        return $this->id;
    }

    /**
     * render the HTML
     * @return string
     */
    public function render(){


        $html = '<div class=" home-mosaic '.$this->getID().'">';
        $html.= ' <figure class="effect-ruby">';
        $html.= '<img src="'.$this->getImage().'" alt="'.$this->alt().'">';
        $html.='<figcaption><p>';
        //$html.= $this->getTranslate();
        $html.= '</p><a href="/'.$this->getControllerName()."/".$this->getURL().'"></a>';
        $html.='</figcaption>';
        $html.='</figure>';
        $html.='</div>';

        return $html;

    }


    /**
     * get the image name from image path cor the alt desc
     * @return mixed
     */
    private function alt()
    {

        $path_parts = pathinfo($this->getImage());

        return $path_parts['filename'];


    }



}
