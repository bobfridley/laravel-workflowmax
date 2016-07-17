<?php

/*
 * This file is part of Laravel Vonage.
 *
 * (c) Bob Fridley <robert.fridley@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BobFridley\Vonage\Authenticators;

use GuzzleHttp\Client;

/**
 * This is the authenticator interface.
 *
 * @author Bob Fridley <robert.fridley@gmail.com>
 */
interface AuthenticatorInterface
{
    /**
     * Set the client to perform the authentication on.
     *
     * @param \GuzzleHttp\Client $client
     *
     * @return \BobFridley\Vonage\Authenticators\AuthenticatorInterface
     */
    public function with(Client $client);

    /**
     * Authenticate the client, and return it.
     *
     * @param string[] $config
     *
     * @throws \InvalidArgumentException
     *
     * @return \Github\Client
     */
    public function authenticate(array $config);
}
