<?php
  
class Agile_Aglsample_Model_Aglsample extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('aglsample/aglsample');
    }
} 