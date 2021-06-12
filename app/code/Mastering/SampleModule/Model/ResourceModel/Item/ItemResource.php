<?php

namespace Mastering\SampleModule\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ItemResource extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('mastering_sample_item', 'id');
    }
}
