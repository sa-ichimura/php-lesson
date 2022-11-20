<?php

declare(strict_types=1);
require('/var/www/app/vendor/autoload.php');
use App\FactoryMethod\Factory\FacebookPoster;
use App\FactoryMethod\Factory\LinkedInPoster;
use App\FactoryMethod\Factory\SocialNetworkPoster;

function clientCode(SocialNetworkPoster $creator):void
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));