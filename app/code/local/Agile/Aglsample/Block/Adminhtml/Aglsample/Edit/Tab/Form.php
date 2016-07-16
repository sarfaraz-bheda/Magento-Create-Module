<?php
  
class Agile_Aglsample_Block_Adminhtml_Aglsample_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('aglsample_form', array('legend'=>Mage::helper('aglsample')->__('Item information')));
        
        $fieldset->addField('title', 'text', array(
            'label'     => Mage::helper('aglsample')->__('Title'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'title',
        ));
  
        $fieldset->addField('status', 'select', array(
            'label'     => Mage::helper('aglsample')->__('Status'),
            'name'      => 'status',
            'values'    => array(
                array(
                    'value'     => 1,
                    'label'     => Mage::helper('aglsample')->__('Active'),
                ),
  
                array(
                    'value'     => 0,
                    'label'     => Mage::helper('aglsample')->__('Inactive'),
                ),
            ),
        ));
        
        $fieldset->addField('content', 'editor', array(
            'name'      => 'content',
            'label'     => Mage::helper('aglsample')->__('Content'),
            'title'     => Mage::helper('aglsample')->__('Content'),
            'style'     => 'width:98%; height:400px;',
            'wysiwyg'   => false,
            'required'  => true,
        ));
        
        if ( Mage::getSingleton('adminhtml/session')->getAglsampleData() )
        {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getAglsampleData());
            Mage::getSingleton('adminhtml/session')->setAglsampleData(null);
        } elseif ( Mage::registry('aglsample_data') ) {
            $form->setValues(Mage::registry('aglsample_data')->getData());
        }
        return parent::_prepareForm();
    }
} 