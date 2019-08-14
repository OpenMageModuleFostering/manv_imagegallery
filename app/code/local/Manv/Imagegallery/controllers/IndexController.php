<?php
class Manv_Imagegallery_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/imagegallery?id=15 
    	 *  or
    	 * http://site.com/imagegallery/id/15 	
    	 */
    	/* 
		$imagegallery_id = $this->getRequest()->getParam('id');

  		if($imagegallery_id != null && $imagegallery_id != '')	{
			$imagegallery = Mage::getModel('imagegallery/imagegallery')->load($imagegallery_id)->getData();
		} else {
			$imagegallery = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($imagegallery == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$imagegalleryTable = $resource->getTableName('imagegallery');
			
			$select = $read->select()
			   ->from($imagegalleryTable,array('imagegallery_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$imagegallery = $read->fetchRow($select);
		}
		Mage::register('imagegallery', $imagegallery);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}