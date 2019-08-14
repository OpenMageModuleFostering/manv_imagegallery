<?php

class Manv_Imagegallery_Model_Mysql4_Imagegallery_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('imagegallery/imagegallery');
    }
}