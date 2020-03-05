<?php
namespace Younify\StoreLocator\Model\ResourceModel\Store;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'store_id';

    /**
     * Load data for preview flag
     *
     * @var bool
     */
    protected $_previewFlag;

    /**
     * Event prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'storelocator_store_collection';

    /**
     * Event object
     *
     * @var string
     */
    protected $_eventObject = 'store_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Younify\StoreLocator\Model\Store', 'Younify\StoreLocator\Model\ResourceModel\Store');
	}
}