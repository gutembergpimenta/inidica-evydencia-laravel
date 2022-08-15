<?php

namespace App\Http\Controllers;

use App\Models\ZApiRequests;
use Illuminate\Http\Request;

class ZApiRequestController extends Controller
{

    protected $url = 'https://api.z-api.io/instances/3AFE6CC42FAD40E05FF472EC2BA01B65/token/E033B9ADBA9FD7F5B09EF2B7/';

    public function getQrCode(Request $request)
    {
        return ZApiRequests::getQRCode($this->url) ;
    }
}
