<?php
  
class Agile_Aglsample_Block_Adminhtml_Aglsample extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_aglsample';
        $this->_blockGroup = 'aglsample';
        $this->_headerText = Mage::helper('aglsample')->__('Item Manager');
        $this->_addButtonLabel = Mage::helper('aglsample')->__('Add Item');
        parent::__construct();
    }
} 