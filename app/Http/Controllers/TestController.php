<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends BaseApiController 
{
    public function test() {
        return response()->json([
            'response' => 'This test API endpoint is working!'
        ], 200);
    }
}