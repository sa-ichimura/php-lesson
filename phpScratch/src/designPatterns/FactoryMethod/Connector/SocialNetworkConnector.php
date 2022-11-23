<?php

declare(strict_types=1);
namespace App\FactoryMethod\Connector;

interface SocialNetworkConnector{
    public function logIn():void;
    public function logOut():void;
    public function createPost():void;
}