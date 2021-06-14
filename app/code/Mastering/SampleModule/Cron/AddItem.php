<?php

namespace Mastering\SampleModule\Cron;

use Magento\Framework\App\Cron;
use Mastering\SampleModule\Model\ItemFactory;

class AddItem
{
    protected $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    public function execute()
    {
        $this->itemFactory->create()->setName('Schedule at' . time())->save();
    }
}
