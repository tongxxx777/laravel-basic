<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'testKey' => 'testValue'
        ];
        return $this->failed($data);
    }
}
