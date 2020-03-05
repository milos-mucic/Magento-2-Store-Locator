<?php
namespace Younify\StoreLocator\Block;
use Magento\Framework\App\Request\Http;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Younify\StoreLocator\Model\StoreFactory;

class Index extends Template
{      

    protected $_storeFactory;
    protected $_request;
    protected $_params;

    public function __construct(
        Http $request,
        Context $context,
        StoreFactory $storeFactory)
    {
        parent::__construct($context);
        $this->_request = $request;
        $this->_storeFactory = $storeFactory;
    }

    public function getTemplateType() 
    {
        $templateType = null;
        $this->_params = $this->_request->getParams();
        if(count($this->_params)){
            $templateType = 'detail';
        }
        else {
            $templateType = 'locations';
        }
        return $templateType;
    }
    
    public function getStoreLocation()
    {
        $storeStatus = 'Enable';
        $templateType = $this->getTemplateType();
        $collection = $this->_storeFactory->create()->getCollection();
        $collection->addFieldToFilter('status', $storeStatus);
        $params=$this->_params;
        if($templateType==='detail' && array_key_exists('id', $params)){
            $id = (int)$params['id'];
            $collection->addFieldToFilter('store_id', $id);

        }
        return $collection;
    }
}