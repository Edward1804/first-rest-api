<?php


namespace App\Traits;

use Illuminate\Http\Response;


trait ApiResponse
{
    /**
     * @param $result
     * @param $message
     * @param $code
     * @return mixed
     */
    public function sendResponse($result, $message, $code) {

//        return Response::json(self::makeResponse($message, $result), $code);
        return Response(self::makeResponse($message, $result), $code);
    }

    /**
     * @param $error
     * @param int $code
     * @param array $data
     * @return mixed
     */
    public function sendError($error, $code = 400, $data = []) {

//        return Response::json(self::makeError($error, $data), $code);
        return Response(self::makeError($error, $data), $code);
    }

    public static function makeResponse($message, $data) {
        return [
            'success' => true,
            'data' => $data,
            'message' => $message,
        ];
    }

    public static function makeError($message, array $data = []) {
        $res = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }
        return $res;
    }
}
