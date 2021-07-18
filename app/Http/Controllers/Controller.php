<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\SabreEPRToken;
use App\Services\SabreGetTicket;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $sabretoken;
    protected $sabregetticket;

    public function __construct(SabreEPRToken $sabretoken , SabreGetTicket $sabregetticket)
    {
        $this->sabretoken = $sabretoken;
        $this->sabregetticket = $sabregetticket;
    }
}
