<?php

namespace Younify\StoreLocator\Controller\Adminhtml\Control;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Younify\StoreLocator\Model\StoreFactory;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Session\SessionManagerInterface;

class Save extends Action
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
    protected $_storeFactory;
    
    /**
     * @var PageFactory
    */
    protected $resultPageFactory;

    /**
     * @var SessionManagerInterface
    */
    protected $_sessionManager;

    /**
     * @param Context $context
     * @param StoreFactory $storeFactory ,
     * @param PageFactory $resultPageFactory ,
     * @param SessionManagerInterface $sessionManager
     */
    public function __construct(
        Context $context,
        StoreFactory $storeFactory,
        PageFactory  $resultPageFactory,
        SessionManagerInterface $sessionManager
    )
    {
        parent::__construct($context);
        $this->_storeFactory = $storeFactory;
        $this->resultPageFactory = $resultPageFactory;
        $this->_sessionManager = $sessionManager;
        
    }
    
    /**
     * Save action
    */
    public function execute()
    {   
        $resultRedirect     = $this->resultRedirectFactory->create();
        $storeModel        = $this->_storeFactory->create();
        $data               = $this->getRequest()->getPost(); 
        
        try{
            if (!empty($data['store_id'])) {
                $storeModel->setStoreLocationId($data['store_id']);
            }
            $storeModel->setData('store_name', $data['store_name']);
            $storeModel->setData('status', $data['status']);
            $storeModel->setData('url_key', $data['url_key']);
            $storeModel->setData('address', $data['address']);
            $storeModel->setData('phone', $data['phone']);
            $storeModel->setData('email_address', $data['email_address']);
            $storeModel->setData('store_description', $data['store_description']);
            $storeModel->setData('featured_image', $data['featured_image']);
            $storeModel->setData('working_hours', $data['working_hours']);
            $storeModel->setData('city', $data['city']);
            $storeModel->setData('latitude', $data['latitude']);
            $storeModel->setData('longitude', $data['longitude']);
            $storeModel->save();
            //check for `back` parameter
            if ($this->getRequest()->getParam('back')) { 
                return $resultRedirect->setPath('*/*/edit', ['store_id' => $storeModel->getId(), '_current' => true, '_use_rewrite' => true]);
            }

            $this->_redirect('*/*');
            $this->messageManager->addSuccess(__('The Store has been saved.'));

        }catch(\Exception $e){
            $this->messageManager->addError(__($e->getMessage()));
        }        
        
    }
}