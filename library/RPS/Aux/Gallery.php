<?php

class RPS_Aux_Gallery{


    const PATH ="/projects/";
    const IMAGE_DIR ="/imagens/";
    const EXT = ".jpg";

    private $dir;
    private $images;


    /**
     * set project dir
     * @param $dir
     */
    public function setdir($dir){

        $this->dir = $dir;
    }

    /**
     * get project dir
     * @return mixed
     */
    private function getDir()
    {
        return $this->dir;
    }


    /**
     * set images for gallery
     * @param array $images
     */
    public function setImages(array $images)
    {
        $this->images = $images;
    }


    /**
     * get images for gallery
     * @return mixed
     */
    private function getImages(){

        return $this->images;

    }


    /**
     * Render the gallery
     * @return string
     */
    public function renderGallery()
    {

        $html = '<div class="col-md-3 display-projects-thumbs">';

        foreach ($this->getImages() as $image)
        {
            $html.='<img src="'.self::PATH.$this->getDir().self::IMAGE_DIR.$this->checkExtension($image).'" alt="'.$this->checkExtension($image).'" onclick="displayimage(this)">';

        }

        $firstPhoto = $this->getImages();
        $pht = '<img src="'.self::PATH.$this->getDir().self::IMAGE_DIR.$this->checkExtension($firstPhoto[0]).'" alt="'.$this->checkExtension($firstPhoto[0]).'">';

        $html.= '</div>';
        $html.= '<div id="displayimage" class="col-md-5 display-projects">'.$pht.'</div>';


        return $html;

    }


    /**
     * check if image name has extension
     * @param $imageName
     * @return mixed
     */
    private function checkExtension($imageName)
    {

        $allowed = array(
            '.jpg',
            '.jpeg',
            '.gif',
            '.png',
            '.flv'
        );
        if (!in_array(strtolower(strrchr($imageName, '.')), $allowed)) {
            return $imageName.self::EXT;
        } else {
            return $imageName;
        }




    }

}