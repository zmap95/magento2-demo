<?php

namespace Mastering\SampleModule\Cron;

use Magento\Framework\App\Cron;
use Mastering\SampleModule\Model\ItemFactory;
use Mastering\SampleModule\Model\Config;

class AddItem
{
    protected $itemFactory;
    private $config;

    public function __construct(ItemFactory $itemFactory, Config $config)
    {
        $this->itemFactory = $itemFactory;
        $this->config = $config;
    }

    public function execute()
    {
        if ($this->config->isEnabled()) {
            $this->itemFactory->create()->setName('Schedule at' . time())->save();
        }
    }
}
