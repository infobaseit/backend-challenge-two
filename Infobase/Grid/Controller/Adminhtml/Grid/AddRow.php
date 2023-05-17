<?php
namespace Infobase\Grid\Controller\Adminhtml\Grid;

use Infobase\Grid\Model\GridFactory;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Registry;

class AddRow extends \Magento\Backend\App\Action
{
    private Registry $coreRegistry;

    private GridFactory $gridFactory;

    public function __construct(
        Context $context,
        Registry $coreRegistry,
        GridFactory $gridFactory
    ) {
        parent::__construct($context);
        $this->coreRegistry = $coreRegistry;
        $this->gridFactory = $gridFactory;
    }

    public function execute()
    {
        $rowId = (int) $this->getRequest()->getParam('id');
        $rowData = $this->gridFactory->create();
        if ($rowId) {
            $rowData = $rowData->load($rowId);
            $rowTitle = $rowData->getAccessKey();
            if (!$rowData->getKeyId()) {
                $this->messageManager->addError(__('row data no longer exist.'));
                $this->_redirect('infobase/grid/rowdata');
                return;
            }
        }
        $this->coreRegistry->register('row_data', $rowData);
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $access_key = $rowId ? __('Edit Access Key Data ').$rowTitle : __('Add Access Key Data');
        $resultPage->getConfig()->getTitle()->prepend($access_key);
        return $resultPage;
    }

    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('Infobase_Grid::add_row');
    }
}
