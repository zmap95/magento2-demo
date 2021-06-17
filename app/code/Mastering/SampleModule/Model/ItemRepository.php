<?php

namespace Mastering\SampleModule\Model;


use Mastering\SampleModule\Api\ItemRepositoryInterface;
use Mastering\SampleModule\Model\ResourceModel\Item\ItemCollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
    protected $itemCollectionFactory;

    public function __construct(ItemCollectionFactory $itemCollectionFactory)
    {
        $this->itemCollectionFactory = $itemCollectionFactory;
    }

    public function getList()
    {
        return $this->itemCollectionFactory->create()->getItems();
    }
}
