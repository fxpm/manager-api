<?php

namespace FXM\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use FXM\Http\Controllers\Controller;

class StatusController extends Controller
{
    /**
     * Display status information about the API server.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'ok' => true,
        ]);
    }
}
