<?php

namespace App\FactoryMethod\Factory;

use App\FactoryMethod\Connector\LinkedInConnector;
use App\FactoryMethod\Connector\SocialNetworkConnector;

class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}

