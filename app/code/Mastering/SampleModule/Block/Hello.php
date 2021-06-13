<?php

namespace Mastering\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Mastering\SampleModule\Model\ResourceModel\Item\ItemCollectionFactory;

class Hello extends Template
{
    private $collectionFactory;

    public function __construct(Template\Context $context, ItemCollectionFactory $collectionFactory, array $data = [])
    {
        $this->collectionFactory = $collectionFactory;

        parent::__construct($context, $data);
    }

    /**
     * @return \Mastering\SampleModule\Model\Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
