<?php

namespace Aego\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class YandexResourceOwner implements ResourceOwnerInterface
{
    private array $response;

    /**
     * Creates a new instance of YandexResourceOwner class.
     *
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->response['id'] ?: null;
    }

    /**
     * Gets user nickname.
     *
     * @return string|null
     */
    public function getNickname(): ?string
    {
        return $this->response['login'] ?: null;
    }

    /**
     * Gets user email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->response['default_email'] ?: null;
    }

    /**
     * Gets display name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->response['display_name'] ?: null;
    }

    /**
     * Gets first name.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->response['first_name'] ?: null;
    }

    /**
     * Gets last name.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->response['last_name'] ?: null;
    }

    /**
     * Gets the gender.
     *
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->response['sex'] ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return $this->response;
    }
}
