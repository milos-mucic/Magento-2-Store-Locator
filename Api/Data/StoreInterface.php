<?php

namespace Younify\StoreLocator\Api\Data;

/**
 * Entity interface.
 */

interface StoreInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const STATUS = 'status';
    const STORE_LOCATION_ID = 'store_id';
    const STORE = 'store_name';
    const URL = 'url_key';
    const ADDRESS = 'address';
    const PHONE = 'phone';
    const EMAIL = 'email_address';
    const DESCRIPTION = 'store_description';
    const STORE_IMAGES = 'featured_image';
    const WORK_HOURS = 'working_hours';
    const CITY = 'city';
    const LONGITUDE = 'longitude';
    const LATITUDE = 'latitude';

    /**
     * Get StoreId.
     *
     * @return int
     */
    public function getStoreLocationId();

    /**
     * Set StoreId.
     * @param $storeLocationId
     */
    public function setStoreLocationId($storeLocationId);

    /**
     * Get Status.
     *
     * @return varchar
     */
    public function getStatus();

    /**
     * Set Status.
     * @param $status
     */
    public function setStatus($status);

    /**
     * Get Store.
     *
     * @return varchar
     */
    public function getStore();

    /**
     * Set Store.
     * @param $store_name
     */
    public function setStore($store_name);

    /**
     * Get Url.
     *
     * @return varchar
     */
    public function getUrl();

    /**
     * Set Url.
     * @param $url_key
     */
    public function setUrl($url_key);

    /**
     * Get Address.
     *
     * @return varchar
     */
    public function getAddress();

    /**
     * Set Address.
     * @param $address
     */
    public function setAddress($address);

    /**
     * Get Phone.
     *
     * @return varchar
     */
    public function getPhone();

    /**
     * Set Phone.
     * @param $phone
     */
    public function setPhone($phone);

    /**
     * Get Email.
     *
     * @return varchar
     */
    public function getEmail();

    /**
     * Set Email.
     * @param $email_address
     */
    public function setEmail($email_address);

    /**
     * Get Decription.
     *
     * @return varchar
     */
    public function getDecription();

    /**
     * Set Decription.
     * @param $store_description
     */
    public function setDecription($store_description);

    /**
     * Get StoreImages.
     *
     * @return varchar
     */
    public function getStoreImages();

    /**
     * Set StoreImages.
     * @param $featured_image
     */
    public function setStoreImages($featured_image);

    /**
     * Get WorkHours.
     *
     * @return varchar
     */
    public function getWorkHours();

    /**
     * Set WorkHours.
     * @param $working_hours
     */
    public function setWorkHours($working_hours);

    /**
     * Get WorkHours.
     * @return varchar
     */
    public function getLatitude();

    /**
     * Set WorkHours.
     * @param $latitude
     */
    public function setLatitude($latitude);

    /**
     * Get WorkHours.
     * @return varchar
     */
    public function getLongitude();

    /**
     * Set WorkHours.
     * @param $longitude
     */
    public function setLongitude($longitude);

    /**
     * Get City.
     * @return varchar
     */
    public function getCity();

    /**
     * Set City.
     * @param $city
     */
    public function setCity($city);
}