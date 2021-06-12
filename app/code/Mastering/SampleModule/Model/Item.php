<?php

namespace Mastering\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;
use Mastering\SampleModule\Model\ResourceModel\Item\ItemResource;

class Item extends AbstractModel
{
    public function __construct()
    {
        $this->_init(ItemResource::class);
    }
}
