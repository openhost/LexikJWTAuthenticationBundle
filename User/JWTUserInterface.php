<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\User;

interface JWTUserInterface
{
    /**
     * Returns the data to include in JWT payload from the current user.
     *
     * @return array The data to include in JWT payload.
     */
    public function getPayload();
}
