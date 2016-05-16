<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Services;

use Lexik\Bundle\JWTAuthenticationBundle\User\JWTUserInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * JWTManagerInterface
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
interface JWTManagerInterface
{
    /**
     * @param UserInterface $user
     *
     * @return string
     */
    public function create(JWTUserInterface $user);

    /**
     * @param TokenInterface $token
     *
     * @return bool|string
     */
    public function decode(TokenInterface $token);
}
