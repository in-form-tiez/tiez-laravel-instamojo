<?php

namespace InFormTiez\Tiezlaravelinstamojo\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use InFormTiez\Tiezlaravelinstamojo\Models\InstamojoPayment;
use InFormTiez\Tiezlaravelinstamojo\Models\InstamojoRefund;

class InstamojoController extends Controller
{
    public function index()
    {
        echo "InstaMojo Installed by sachin soni!!!";
        exit;
    }
}
