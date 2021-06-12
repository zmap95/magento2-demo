<?php

namespace Mastering\SampleModule\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Mastering\SampleModule\Model\Item;

class ItemCollection extends AbstractDb
{
    protected function _construct()
    {
        $this->_init(Item::class, ItemResource::class);
    }
}
