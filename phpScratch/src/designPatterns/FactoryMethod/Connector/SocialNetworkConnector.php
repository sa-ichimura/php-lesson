<?php
namespace App\Connector;

interface SocialNetworkConnector{
    public function logIn():void;
    public function logOut():void;
    public function createPost():void;
}