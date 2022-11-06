<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendResponse($data = null, $message = null, $status = 200, )
    {
        $response = [
            'success' => true
        ];

        if($message) $response['message'] = $message;
        if($data) $response['data'] = $data;

        return response($response, $status);
    }

    public function sendError($status = 200, $message = null)
    {
        $response = [
            'success' => false
        ];
        if($message) $response['message'] = $message;

        return response($response, $status);
    }
}
