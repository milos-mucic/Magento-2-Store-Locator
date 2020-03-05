<?php
namespace Younify\StoreLocator\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

/**
 * StoreLocator Entity mysql resource.
 */
class Store extends AbstractDb
{
    /**
     * Construct.
     *
     * @param Context $context
     *
     */
    public function __construct(
        Context $context
    ) 
    {
        parent::__construct($context);
    }
 
    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('younify_store_locator', 'store_id');
    }
}