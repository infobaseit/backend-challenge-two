<?php
namespace Infobase\Grid\Api\Data;

interface GridInterface
{
    const KEY_ID = 'key_id';

    const ACCESSKEY = 'access_key';

    public function getKeyId();

    public function setKeyId($keyId);

    public function getAccessKey();

    public function setAccessKey($access_key);
}
