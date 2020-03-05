<?php
namespace Younify\StoreLocator\Controller\Adminhtml\Control;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Registry;
use Younify\StoreLocator\Model\StoreFactory;

class Edit extends Action
{
    /**
         * Authorization level of a basic admin session
         *
         * @see _isAllowed()
         */
        const ADMIN_RESOURCE = 'Younify_StoreLocator::store';

        /**
         * @var Registry
         */
        private $coreRegistry;
    
        /**
         * @var StoreFactory
         */
        private $storeFactory;
    
        /**
         * @param Context $context
         * @param Registry $coreRegistry,
         * @param StoreFactory $storeFactory
         */
        public function __construct(
            Context $context,
            Registry $coreRegistry,
            StoreFactory $storeFactory
        ) {
            parent::__construct($context);
            $this->coreRegistry = $coreRegistry;
            $this->storeFactory = $storeFactory;
        }
    
       
        public function execute()
        {
            $rowId = $this->getRequest()->getParam('store_id');
            $rowData = $this->storeFactory->create();
            
            
            if ($rowId) {
                $rowData = $rowData->load($rowId);
            
                if (!$rowData->getStoreLocationId()) {
                    $this->messageManager->addError(__('Store data does not exist.'));
                    $this->_redirect('*/*/index');
                    return;
                }
            }
    
            $this->coreRegistry->register('row_data', $rowData);
            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
            $resultPage->setActiveMenu('Younify_StoreLocator::first_level_menu');
            $title = "Store Information";
            $resultPage->getConfig()->getTitle()->prepend($title);
            return $resultPage;
        }
    
      
    }