<?php

	class Pixxy_Csvimport_Model_Resource_File_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract{
		
		public function _construct(){
			$this->_init('pixxy_csvimport/file');
		}
		
		public function getSelectCountSql() {
			$this->_renderFilters();
		    $countSelect = clone $this->getSelect();
		    $countSelect->reset(Zend_Db_Select::ORDER);
		    $countSelect->reset(Zend_Db_Select::LIMIT_COUNT);
		    $countSelect->reset(Zend_Db_Select::LIMIT_OFFSET);
		    $countSelect->reset(Zend_Db_Select::COLUMNS);
		
		    // Count doesn't work with group by columns keep the group by 
		    if(count($this->getSelect()->getPart(Zend_Db_Select::GROUP)) > 0) {
		        $countSelect->reset(Zend_Db_Select::GROUP);
		        $countSelect->distinct(true);
		        $group = $this->getSelect()->getPart(Zend_Db_Select::GROUP);
		        $countSelect->columns("COUNT(DISTINCT ".implode(", ", $group).")");
		    } else {
		        $countSelect->columns('COUNT(*)');
		    }
		    return $countSelect;
		}

	}