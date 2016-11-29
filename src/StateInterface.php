<?php

namespace Neutron\Auth;

/**
 * Interface StateInterface
 *
 * @package Neutron\Auth
 */
interface StateInterface
{
    public function read();

    public function write();
}