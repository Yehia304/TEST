<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TokenRequestController extends Controller
{
    public function Sessioncreation()
    {
        $token = $this->sabretoken->getSabreTokenSOAP();
        $response = $this->sabregetticket->getTickets($token);
//        return $token;
        dd($response);
    }

    public function TokenRq()
    {
        $EPR = 'VmpFNk5qRTFPVEk0T2pGUlYwZzZRVUU9OloyWTFhek5sWnc9PQ==';

        $val = $this->sabretoken->getSabreTokenREST($EPR);

        return $val['access_token'];

    }
}
