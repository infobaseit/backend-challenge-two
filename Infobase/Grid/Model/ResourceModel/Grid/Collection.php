<?php
namespace Infobase\Grid\Model\ResourceModel\Grid;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'key_id';
    protected $_eventPrefix = 'infobase_grid_collection';
    protected $_eventObject = 'key_collection';

    protected function _construct()
    {
        $this->_init(
            'Infobase\Grid\Model\Grid',
            'Infobase\Grid\Model\ResourceModel\Grid'
        );
    }
}
