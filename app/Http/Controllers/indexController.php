<?php

namespace App\Http\Controllers;

use App\Services\indexServices;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function sendEmailAction(Request $request) {
        return indexServices::sendEmailServices($request);
    }
}
