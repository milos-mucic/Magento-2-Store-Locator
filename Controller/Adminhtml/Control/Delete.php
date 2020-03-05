<?php

namespace Younify\StoreLocator\Controller\Adminhtml\Control;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Redirect;
use Younify\StoreLocator\Model\Store as Store;

class Delete extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Younify_StoreLocator::store';

    /**
     * Delete action
     *
     * @return Redirect
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('store_id');

        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(Store::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccess(__('Store has been deleted.'));
                // go to grid
                
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                
                // display error message
                $this->messageManager->addError($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['store_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addError(__('We can\'t find store to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    
    }
    
}
