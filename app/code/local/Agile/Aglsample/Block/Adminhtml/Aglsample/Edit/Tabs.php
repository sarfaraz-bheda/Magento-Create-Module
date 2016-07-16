 <?php
  
class Agile_Aglsample_Block_Adminhtml_Aglsample_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
  
    public function __construct()
    {
        parent::__construct();
        $this->setId('aglsample_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('aglsample')->__('News Information'));
    }
  
    protected function _beforeToHtml()
    {
        $this->addTab('form_section', array(
            'label'     => Mage::helper('aglsample')->__('Item Information'),
            'title'     => Mage::helper('aglsample')->__('Item Information'),
            'content'   => $this->getLayout()->createBlock('aglsample/adminhtml_aglsample_edit_tab_form')->toHtml(),
        ));
        
        return parent::_beforeToHtml();
    }
}