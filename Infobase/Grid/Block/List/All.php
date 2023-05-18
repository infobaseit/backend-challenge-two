<?php
declare(strict_types=1);

namespace Infobase\Grid\Block\List;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Infobase\Grid\Model\Grid;
USE Infobase\Grid\Helper\Data;

class All extends Template
{
    private Grid $gridFactory;
    private Data $helperData;

    public function __construct(
        Context $context,
        Grid $gridFactory,
        Data $helperData,
        array $data = []
    ) {
        $this->gridFactory = $gridFactory;
        $this->helperData = $helperData;
        parent::__construct($context, $data);
    }

    public function getGridCollection()
    {
        if (empty($this->helperData->getGeneralConfig('enable'))) {
            return [];
        } else {
            $grid = $this->gridFactory;
            return $grid->getCollection();
        }
    }
}
