<?php

namespace Neutron\Auth;

interface AuthAwareInterface
{

    public function read();


    public function write($id, $token);
}