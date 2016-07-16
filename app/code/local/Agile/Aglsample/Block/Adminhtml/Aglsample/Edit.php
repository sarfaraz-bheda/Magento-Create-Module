<?php
  
class Agile_Aglsample_Block_Adminhtml_Aglsample_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                
        $this->_objectId = 'id';
        $this->_blockGroup = 'aglsample';
        $this->_controller = 'adminhtml_aglsample';
  
        $this->_updateButton('save', 'label', Mage::helper('aglsample')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('aglsample')->__('Delete Item'));
    }
  
    public function getHeaderText()
    {
        if( Mage::registry('aglsample_data') && Mage::registry('aglsample_data')->getId() ) {
            return Mage::helper('aglsample')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('aglsample_data')->getTitle()));
        } else {
            return Mage::helper('aglsample')->__('Add Item');
        }
    }
} 