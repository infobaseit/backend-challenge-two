<?php

namespace Infobase\Grid\Controller\Adminhtml\Grid;

use Infobase\Grid\Model\GridFactory;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

class Save extends Action
{
    var GridFactory $gridFactory;

    public function __construct(
        Context $context,
        GridFactory $gridFactory
    ) {
        parent::__construct($context);
        $this->gridFactory = $gridFactory;
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if (!$data) {
            $this->_redirect('infobase/grid/addrow');
            return;
        }
        try {
            $rowData = $this->gridFactory->create();
            $rowData->setData($data);
            if (isset($data['id'])) {
                $rowData->setEntityId($data['id']);
            }
            $rowData->save();
            $this->messageManager->addSuccess(__('Row data has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('infobase/grid/index');
    }

    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('Infobase_Grid::save');
    }
}
