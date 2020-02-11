<?php

namespace App\Http\Controllers;

use Validator;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Firebase\JWT\ExpiredException;
use Illuminate\Support\Facades\Hash;

class TestController extends BaseApiController 
{
    public function test() {
        return response()->json([
            'response' => 'This test API endpoint is working!'
        ], 200);
    }
}