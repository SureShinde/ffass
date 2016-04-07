<?php
 /**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Softprodigy
 * @package     Softprodigy_Giftwrap
 * @copyright   Copyright (c) 2013 Softprodigy System Solutions Pvt. Ltd (http://www.softprodigy.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
class Softprodigy_Giftwrap_Model_Entity_Setup extends Mage_Eav_Model_Entity_Setup
{
    public function getDefaultEntities()
    {
        return array(
        	'giftwrap_product' => array(
                'entity_model'      => 'giftwrap/product',
                'table'=>'giftwrap/entity',
                'attributes' => array(
               		'giftwrap_entity_id'         => array('type'=>'static'),
               		'giftwrap_name'    => array('type'=>'varchar'),
               		'giftwrap_image'    => array('type'=>'varchar'),
               		'giftwrap_price'    => array('type'=>'decimal'),
               		'giftwrap_status'    => array('type'=>'int'),
                    'giftwrap_created_at'        => array('type'=>'datetime')
              )
            )
        );
    }
}
