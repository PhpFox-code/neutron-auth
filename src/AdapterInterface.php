<?php
namespace Neutron\Auth;

/**
 * Interface AdapterInterface
 *
 * @package Neutron\Auth
 */
interface AdapterInterface
{
    /**
     * @return AuthResult
     */
    public function authenticate();
}