<?php

namespace App\Mercure;

use Symfony\Component\Mercure\Jwt\TokenProviderInterface;

final class MyTokenProvider implements TokenProviderInterface
{
    public function getJwt(): string
    {
        return 'the-JWT';
    }
}