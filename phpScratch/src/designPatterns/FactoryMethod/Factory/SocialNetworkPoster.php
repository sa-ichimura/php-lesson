<?php

namespace App\Factory;

abstract class SocialNetworkPoster {
    abstract public function getSocialNetwork();

    public function post($content):void
    {
        $network = $this->getSocialNetwork();
    }
}