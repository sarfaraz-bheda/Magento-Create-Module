<?php
  
class Agile_Aglsample_Model_Mysql4_Aglsample extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {  
        $this->_init('aglsample/aglsample', 'aglsample_id');
    }
} 