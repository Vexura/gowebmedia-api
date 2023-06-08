<?php

namespace GoWebMediaAPI\Customer;

use GoWebMediaAPI\GoWebMediaAPI;
class Customer
{
    private $GoWebMediaAPI;

    public function __construct(GoWebMediaAPI $TekBaseAPI)
    {
        $this->GoWebMediaAPI = $TekBaseAPI;
    }

    public function get(){
        return $this->GoWebMediaAPI->get('user/data');
    }

    public function invoices(){
        return $this->GoWebMediaAPI->get('user/invoices');
    }

    public function usage(){
        return $this->GoWebMediaAPI->get('user/usage');
    }
}