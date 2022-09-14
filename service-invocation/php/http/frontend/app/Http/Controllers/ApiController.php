<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function apiController()
    {
        $res = Http::get('http://localhost:350/v1.0/method/backend/api/cars/get');
        return view('api', ['data' => $res->json()]);
    }
}