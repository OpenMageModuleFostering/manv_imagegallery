<?php
class Manv_Imagegallery_Block_Adminhtml_Imagegallery extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_imagegallery';
    $this->_blockGroup = 'imagegallery';
    $this->_headerText = Mage::helper('imagegallery')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('imagegallery')->__('Add Item');
    parent::__construct();
  }
}