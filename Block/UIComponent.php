<?php

/**
 * Created by PhpStorm.
 * User: kaushik
 * Date: 14/1/20
 * Time: 11:31 PM
 */
namespace Personal\UiComponent\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;


class UIComponent extends Template
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

}