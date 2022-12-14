<?php

declare(strict_types=1);
namespace App\FactoryMethod\Connector;

final class LinkedInConnector implements SocialNetworkConnector {
    private string $email;
    private string $password;

    public function __construct(string $email ,string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "send Linked Login API request \n user:$this->email \n: $this->password \n";
    }

    public function logOut(): void
    {
        echo "send Linked Logout API request \n user:$this->email\n";
    }

    public function createPost(): void
    {
        echo "send Linked create post API request \n user:$this->email\n $this->password\n";
    }
}