<?php   
class Manv_Imagegallery_Block_Index extends Mage_Core_Block_Template{   



public function getImagegalleryEnabled()
    {
        return Mage::getStoreConfig('manvimagegallerysection/manvimagegallerygroup/status',Mage::app()->getStore());
    }

public function getImagegalleryPaggingstart()
    {
        return Mage::getStoreConfig('manvimagegallerysection/manvimagegallerygroup/numofiteminpage',Mage::app()->getStore());
    }

public function getImagegalleryRowitem()
    {
        return Mage::getStoreConfig('manvimagegallerysection/manvimagegallerygroup/numofiteminrow',Mage::app()->getStore());
    }



}
