<?php
namespace Infobase\Grid\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'key_id';

    protected function _construct()
    {
        $this->_init('Infobase\Grid\Model\Grid', 'Infobase\Grid\Model\ResourceModel\Grid');
    }
}
