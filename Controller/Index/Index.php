<?php
/**
 * Created by PhpStorm.
 * User: kaushik
 * Date: 14/1/20
 * Time: 11:35 PM
 */
namespace Personal\UiComponent\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        return $this->_pageFactory->create();
    }
}