<?php

namespace Learning\FirstUnit\Controller\Page;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;

class View extends Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        //https://www.mageplaza.com/magento-2-module-development/view-block-layout-template-magento-2.html
        return $this->pageFactory->create();
    }
}
