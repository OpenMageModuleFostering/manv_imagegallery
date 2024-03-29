<?php
class Manv_Imagegallery_Block_Adminhtml_Imagegallery_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("imagegallery_form", array("legend"=>Mage::helper("imagegallery")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("imagegallery")->__("Title"),
						"name" => "title",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('imagegallery')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField("url", "text", array(
						"label" => Mage::helper("imagegallery")->__("URL"),
						"name" => "url",
						));
					
						$fieldset->addField("description", "text", array(
						"label" => Mage::helper("imagegallery")->__("Description"),
						"name" => "description",
						));
									
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('imagegallery')->__('Status'),
						'values'   => Manv_Imagegallery_Block_Adminhtml_Imagegallery_Grid::getValueArray4(),
						'name' => 'status',
						));

				if (Mage::getSingleton("adminhtml/session")->getImagegalleryData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getImagegalleryData());
					Mage::getSingleton("adminhtml/session")->setImagegalleryData(null);
				} 
				elseif(Mage::registry("imagegallery_data")) {
				    $form->setValues(Mage::registry("imagegallery_data")->getData());
				}
				return parent::_prepareForm();
		}
}
