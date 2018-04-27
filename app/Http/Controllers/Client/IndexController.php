<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->responseFactory->view('client/index');
    }
}
