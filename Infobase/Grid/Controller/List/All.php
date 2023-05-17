<?php
declare(strict_types=1);

namespace Infobase\Grid\Controller\List;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Customer\Model\Customer;
use Magento\Customer\Model\CustomerFactory;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Customer\Model\Session;
use Infobase\Grid\Model\Grid;

class All implements HttpGetActionInterface
{
    private PageFactory $resultPageFactory;
    private Session $session;
    private Customer $modelCustomer;
    private CustomerFactory $customerFactory;
    private StoreManagerInterface $storeManager;
    private Grid $gridFactory;

    public function __construct(
        PageFactory $resultPageFactory,
        Session $session,
        Customer $modelCustomer,
        CustomerFactory $customerFactory,
        StoreManagerInterface $storeManager,
        Grid $gridFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->session = $session;
        $this->modelCustomer = $modelCustomer;
        $this->customerFactory = $customerFactory;
        $this->storeManager = $storeManager;
        $this->gridFactory = $gridFactory;
    }

    public function execute(): Page|ResultInterface|ResponseInterface
    {
        return $this->resultPageFactory->create();
    }
}
