<?php

namespace Younify\StoreLocator\Controller\Adminhtml\Control;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
    {
        /**
         * Authorization level of a basic admin session
         *
         * @see _isAllowed()
         */
        const ADMIN_RESOURCE = 'Younify_StoreLocator::store';

        /**
        * @var PageFactory
        */
        protected $resultPageFactory;

        /**
         * Constructor
         *
         * @param Context $context
         * @param PageFactory $resultPageFactory
         */
        public function __construct(
            Context $context,
            PageFactory $resultPageFactory
        ) {
                parent::__construct($context);
                $this->resultPageFactory = $resultPageFactory;
        }

        /**
         * Load the page defined in view/adminhtml/layout/routelocator_control_index.xml
         *
         * @return Page
         */
        public function execute()
        {
            $resultPage = $this->resultPageFactory->create();
            $resultPage->setActiveMenu('Younify_StoreLocator::first_level_menu');

            $resultPage->getConfig()->getTitle()->prepend((__('Store Locator')));

            return $resultPage;
        }
        
    }
?>
  