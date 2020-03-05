<?php
namespace Younify\StoreLocator\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Younify\StoreLocator\Api\Data\StoreInterface;

class Store extends AbstractModel implements StoreInterface, IdentityInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'storelocator_records';

    /**
     * @var string
     */
    protected $_cacheTag = 'storelocator_records';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'storelocator_records';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Younify\StoreLocator\Model\ResourceModel\Store');
    }

    public function getStoreLocationId()
    {
        return $this->getData(self::STORE_LOCATION_ID);
    }

    public function setStoreLocationId($storeLocationId)
    {
        return $this->setData(self::STORE_LOCATION_ID, $storeLocationId);
    }

    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    public function getStore()
    {
        return $this->getData(self::STORE);
    }

    public function setStore($store_name)
    {
        return $this->setData(self::STORE, $store_name);
    }

    public function getUrl()
    {
        return $this->getData(self::URL);
    }

    public function setUrl($url_key)
    {
        return $this->setData(self::URL, $url_key);
    }

    public function getAddress()
    {
        return $this->getData(self::ADDRESS);
    }

    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }

    public function getPhone()
    {
        return $this->getData(self::PHONE);
    }

    public function setPhone($phone)
    {
        return $this->setData(self::PHONE, $phone);
    }

    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }


    public function setEmail($email_address)
    {
        return $this->setData(self::EMAIL, $email_address);
    }

    public function getDecription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    public function setDecription($store_description)
    {
        return $this->setData(self::DESCRIPTION, $store_description);
    }

    public function getStoreImages()
    {
        return $this->getData(self::STORE_IMAGES);
    }

    public function setStoreImages($featured_image)
    {
        return $this->setData(self::STORE_IMAGES, $featured_image);
    }

    public function getWorkHours()
    {
        return $this->getData(self::WORK_HOURS);
    }

    public function setWorkHours($working_hours)
    {
        return $this->setData(self::WORK_HOURS, $working_hours);
    }

    public function getCity()
    {
        return $this->getData(self::CITY);
    }

    public function setCity($city)
    {
        return $this->setData(self::CITY, $city);
    }

    public function getLatitude()
    {
        return $this->getData(self::LATITUDE);
    }

    public function setLatitude($latitude)
    {
        return $this->setData(self::LATITUDE, $latitude);
    }

    public function getLongitude()
    {
        return $this->getData(self::LONGITUDE);
    }

    public function setLongitude($longitude)
    {
        return $this->setData(self::LONGITUDE, $longitude);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getStoreLocationId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
