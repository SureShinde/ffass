<?php

	class Pixxy_Csvimport_Model_Resource_File extends Mage_Core_Model_Resource_Db_Abstract{
		
		protected function _construct(){
			$this->_init('pixxy_csvimport/file', 'id');
		}
		
	}