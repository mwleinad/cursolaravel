<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Build a successful response
     *
     * @param $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = 200)
    {
        return response()->json($data, $code);
    }

    /**
     * Build an error response
     *
     * @param $data
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse($data, $code)
    {
        return response()->json($data, $code);
    }
}
