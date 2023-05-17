<?php
declare(strict_types=1);

namespace Infobase\Grid\Block\List;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Infobase\Grid\Model\Grid;

class All extends Template
{
    private Grid $gridFactory;
    public function __construct(
        Context $context,
        Grid $gridFactory,
        array $data = []
    ) {
        $this->gridFactory = $gridFactory;
        parent::__construct($context, $data);
    }

    public function getGridCollection()
    {
        $grid = $this->gridFactory;
        return $grid->getCollection();
    }
}
