<?php

namespace App\Http\Controllers;

use App\Models\ZApiRequests;
use Illuminate\Http\Request;

class ZApiRequestController extends Controller
{

    protected $url = ' https://api.z-api.io/instances/3AFE67D166F450F32A1D72EC2BA01B65/token/3B4282B2B6EF17ED6070BC5C/';

    public function getQrCode(Request $request)
    {
        return ZApiRequests::getQRCode($this->url) ;
    }
}
