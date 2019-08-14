<?php
class Manv_Imagegallery_Block_Imagegallery extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getImagegallery()     
     { 
        if (!$this->hasData('imagegallery')) {
            $this->setData('imagegallery', Mage::registry('imagegallery'));
        }
        return $this->getData('imagegallery');
        
    }
}