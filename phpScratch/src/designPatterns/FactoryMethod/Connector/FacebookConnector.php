<?php

declare(strict_types=1);

namespace App\FactoryMethod\Connector;

final class FacebookConnector implements SocialNetworkConnector {
    private string $login;
    private string $password;

    public function __construct(string $login ,string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "send Facebook Login API request \n user:$this->login \n: $this->password \n";
    }

    public function logOut(): void
    {
        echo "send Facebook Logout API request \n user:$this->login\n";
    }

    public function createPost(): void
    {
        echo "send Facebook create post API request \n user:$this->login\n $this->password\n";
    }
}