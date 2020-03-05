<?php
namespace Younify\StoreLocator\Controller\Adminhtml\Control;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;
use Younify\StoreLocator\Model\StoreFactory;
use Magento\Framework\Controller\ResultFactory;
    
class Addnew extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Younify_StoreLocator::store';

    
    /**
     * @var StoreFactory
     */
    private $storeFactory;

    /**
     * @param Context $context
     * @param StoreFactory $storeFactory
     */
    public function __construct(
        Context $context,
        StoreFactory $storeFactory
    ) {
        parent::__construct($context);
        $this->storeFactory = $storeFactory;
    }
    

    /**
     * Create new Entity
     *
     * @return ResultInterface
     */
    public function execute()
    {   
        
        $this->storeFactory->create();
        
        
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Younify_StoreLocator::first_level_menu');
        
        $title = "Store Information";
        
        $resultPage->getConfig()->getTitle()->prepend($title);
        
        return $resultPage;
    }
}  