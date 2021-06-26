<?php

namespace Mastering\SampleModule\Controller\Adminhtml\Item;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Mastering\SampleModule\Model\ItemFactory;

class Save extends Action
{
    private $itemFactory;

    public function __construct(Context $context, ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getParams()['general'];

        $this->itemFactory->create()->setData($data)->save();

        return $this->resultRedirectFactory->create()->setPath('mastering/index/index');
    }
}
