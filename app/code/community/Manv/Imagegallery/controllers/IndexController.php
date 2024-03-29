<?php
class Manv_Imagegallery_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Image Gallery"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("image gallery", array(
                "label" => $this->__("Image Gallery"),
                "title" => $this->__("Image Gallery")
		   ));

      $this->renderLayout(); 
	  
    }
}