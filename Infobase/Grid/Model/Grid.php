<?php
namespace Infobase\Grid\Model;

use Infobase\Grid\Api\Data\GridInterface;
use Magento\Framework\Model\AbstractModel;

class Grid extends AbstractModel implements GridInterface
{
    const CACHE_TAG = 'infobase_accesskey_grid';

    protected $_cacheTag = 'infobase_accesskey_grid';

    protected $_eventPrefix = 'infobase_accesskey_grid';

    protected function _construct()
    {
        $this->_init('Infobase\Grid\Model\ResourceModel\Grid');
    }

    public function getKeyId(): int
    {
        return $this->getData(self::KEY_ID);
    }

    public function setKeyId($keyId)
    {
        return $this->setData(self::KEY_ID, $keyId);
    }

    public function getAccessKey()
    {
        return $this->getData(self::ACCESS_KEY);
    }

    public function setAccessKey($access_key)
    {
        return $this->setData(self::ACCESS_KEY, $access_key);
    }
}
