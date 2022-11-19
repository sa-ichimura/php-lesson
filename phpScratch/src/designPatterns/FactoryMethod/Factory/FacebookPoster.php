<?php
namespace App\FactoryMethod\Factory;

use App\FactoryMethod\Connector\FacebookConnector;
use App\FactoryMethod\Connector\SocialNetworkConnector;
use App\FactoryMethod\Factory\SocialNetworkPoster;

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
        return new FacebookConnector($this->login,$this->password);
    }
}

