<?php
namespace Younify\StoreLocator\Controller\Frontend;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\Http;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\Exception\NotFoundException;

class Index extends Action
{
    protected $_pageFactory;
    protected $_request;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        Http $request
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_request = $request;
        return parent::__construct($context);
    }

    public function execute()
    {
        $params= $this->_request->getParams();
		$paramsLength=count($params);
		if($paramsLength===0  || ($paramsLength>0 && array_key_exists('id', $params))){
			$resultPage = $this->_pageFactory->create();
			return $resultPage;
		}     
		else {
			throw new NotFoundException(__('Parameter is incorrect.'));
		}
    }
}