<?php

namespace App\Factory;

use App\Connector\SocialNetworkConnector;

class FacebookPoster extends SocialNetworkPoster {
    private string $login;
    private string $password;

    public function __construct(string $login, string $password) 
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new SocialNetworkConnector($this->login,$this->password);
    }
}

