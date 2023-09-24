<?php

namespace app\controller;

use app\core\controller;

class MessageController extends Controller
{

    public function throwError(string $title, string $message, $code = 404)
    {
        http_response_code($code);
        $this->load('message/throwError',
            [
                'title' => $title, 
                'message' => $message,
            ]
        );
    }
}
