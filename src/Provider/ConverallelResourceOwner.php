<?php

namespace Converallel\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class ConverallelResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getId()
    {
        return $this->__get('user_id');
    }

    /**
     * Get user's email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->__get('email');
    }

    /**
     * Get user's image url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->__get('picture');
    }

    /**
     * Get user's first name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->__get('first_name');
    }

    /**
     * Get user's last name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->__get('last_name');
    }

    /**
     * Get user's birthdate
     *
     * @return string|null
     */
    public function getBirthdate()
    {
        return $this->__get('birthdate');
    }

    /**
     * Get user's gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->__get('gender');
    }

    public function toArray()
    {
        $this->response;
    }

    /**
     * Get a property from the response object
     * @param string $property
     * @return string|null
     */
    public function __get($property)
    {
        return isset($this->response[$property]) ? $property : null;
    }
}