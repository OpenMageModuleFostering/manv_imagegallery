<?php

class Manv_Imagegallery_Block_Adminhtml_Imagegallery_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("imagegalleryGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("imagegallery/imagegallery")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("imagegallery")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("title", array(
				"header" => Mage::helper("imagegallery")->__("Title"),
				"index" => "title",
				));
				$this->addColumn("url", array(
				"header" => Mage::helper("imagegallery")->__("URL"),
				"index" => "url",
				));
				$this->addColumn("description", array(
				"header" => Mage::helper("imagegallery")->__("Description"),
				"index" => "description",
				));
						$this->addColumn('status', array(
						'header' => Mage::helper('imagegallery')->__('Status'),
						'index' => 'status',
						'type' => 'options',
						'options'=>Manv_Imagegallery_Block_Adminhtml_Imagegallery_Grid::getOptionArray4(),				
						));
						
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_imagegallery', array(
					 'label'=> Mage::helper('imagegallery')->__('Remove Imagegallery'),
					 'url'  => $this->getUrl('*/adminhtml_imagegallery/massRemove'),
					 'confirm' => Mage::helper('imagegallery')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray4()
		{
            $data_array=array(); 
			$data_array[0]='Enable';
			$data_array[1]='Disable';
            return($data_array);
		}
		static public function getValueArray4()
		{
            $data_array=array();
			foreach(Manv_Imagegallery_Block_Adminhtml_Imagegallery_Grid::getOptionArray4() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}