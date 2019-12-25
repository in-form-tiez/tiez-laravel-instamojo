<?php

namespace InFormTiez\TiezLaravelInstamojo\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use InFormTiez\TiezLaravelInstamojo\Models\InstamojoPayment;
use InFormTiez\TiezLaravelInstamojo\Models\InstamojoRefund;

class InstamojoController extends Controller
{
    public function index()
    {
        echo "InstaMojo Installed and updated by sachin soni!!!";
        exit;
    }
}
