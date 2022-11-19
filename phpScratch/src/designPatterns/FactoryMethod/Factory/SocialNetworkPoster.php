<?php
namespace App\FactoryMethod\Factory;

use App\FactoryMethod\Connector\SocialNetworkConnector;

abstract class SocialNetworkPoster {
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content):void
    {
        // Call the factory method to create a Product object...
        $network = $this->getSocialNetwork();
        // ...then use it as you will.
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}