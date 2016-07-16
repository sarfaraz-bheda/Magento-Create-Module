<?php
  
class Agile_Aglsample_Model_Mysql4_Aglsample_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        //parent::__construct();
        $this->_init('aglsample/aglsample');
    }
} 