<?php

class Manv_Imagegallery_Block_Adminhtml_Imagegallery_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('imagegallery_form', array('legend'=>Mage::helper('imagegallery')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('imagegallery')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('imagegallery')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('imagegallery')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('imagegallery')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('imagegallery')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('imagegallery')->__('Content'),
          'title'     => Mage::helper('imagegallery')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getImagegalleryData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getImagegalleryData());
          Mage::getSingleton('adminhtml/session')->setImagegalleryData(null);
      } elseif ( Mage::registry('imagegallery_data') ) {
          $form->setValues(Mage::registry('imagegallery_data')->getData());
      }
      return parent::_prepareForm();
  }
}